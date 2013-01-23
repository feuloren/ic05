function init_sigma(gdfPath) {
    // Initialize sigma.js:
    var sigInst = sigma.init(
        document.getElementById('sigma-container')
    ).graphProperties({
        minNodeSize: 0.5,
        maxNodeSize: 5
    });

    // Load graph file:
    var loader = new XMLHttpRequest();
    loader.open('GET', gdfPath);
    loader.onreadystatechange = function() {
        if (loader.readyState == 4) {
            initGraph(loader.responseText);
        }
    }
    loader.send();

    // Parse GDF file:
    function initGraph(rawData) {

        // Split lines:
        var lines = rawData.split(/\r?\n/),
        line, i = 0, l = lines.length,
        parsingEdges = false, parsingNodes = false,
        nodeAttributes = [], edgeAttributes = [],
        edgesCount = 0;

        // Iterate on lines:
        for (; i < l; i++) {
            line = lines[i];

            if (line.match(/^nodedef>/i)) {
                // Detect node attributes
                parsingNodes = true;
                parsingEdges = false;
                nodeAttributes = line.replace(/^nodedef>/i, '').split(/,/g).map(function(s) {
                    return s.replace(/ .*/, '');
                });
            } else if (line.match(/^edgedef>/i)) {
                // Detect edge attributes
                parsingEdges = true;
                parsingNodes = false;
                edgeAttributes = line.replace(/^edgedef>/i, '').split(/,/g).map(function(s) {
                    return s.replace(/ .*/, '');
                });
            } else if (parsingEdges) {
                // Add edge
                var edge = {},
                source, target,
                values = line.split(/,/g);

                edgeAttributes.forEach(function(attr, i) {
                    if (attr === 'node1')
                        source = values[i];
                    else if (attr === 'node2')
                        target = values[i];
                    else
                        edge[attr] = values[i];
                });

                if (source && target) {
                    sigInst.addEdge(++edgesCount, source, target, edge);
                }
            } else if (parsingNodes) {
                // Add node
                var node = {},
                nodeId,
                values = line.split(/,/g);

                nodeAttributes.forEach(function(attr, i) {
                    if (attr === 'name')
                        nodeId = values[i];
                    else if (attr == 'type') {
                        type = values[i];
                        if (type == 'actor')
                            node['color'] = '#ff0000';
                        else if (type == 'project')
                            node['color'] = '#2dc63b';
                        else if (type == 'keyword')
                            node['color'] = '#5f57fd';
                    }
                    else
                        node[attr] = values[i];
                });

                if (nodeId) {
                    sigInst.addNode(nodeId, node);
                }
            }
        }

        // Some fine tuning:
        var R = 100,
        i = 0,
        L = sigInst.getNodesCount();


        sigInst.iterNodes(function(n) {
            // Position
            n.x = Math.cos(Math.PI*(i++)/L)*R;
            n.y = Math.sin(Math.PI*(i++)/L)*R;

            // Size
            n.size = n.degree;
        });

        // Init layout algorithm:
        sigInst.startForceAtlas2();

        // Stop layout in ten seconds:
        window.setTimeout(function() {
            sigInst.stopForceAtlas2();
        }, 8000);
    }
}
