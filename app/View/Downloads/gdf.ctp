nodedef> name,label,type
<?php foreach($nodes as $node) {
      echo $node['name'].','.$node['label'].','.$node['type']."\n";
} ?>
edgedef> node1, node2
<?php foreach($edges as $edge) {
      echo $edge[0].','.$edge[1]."\n";
} ?>