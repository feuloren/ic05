nodedef>name VARCHAR,label VARCHAR,type VARCHAR
<?php foreach($nodes as $node) {
      echo $node['name'].','.$node['label'].','.$node['type']."\n";
} ?>

edgedef>node1 VARCHAR,node2 VARCHAR
<?php foreach($edges as $edge) {
      echo $edge[0].','.$edge[1]."\n";
} ?>
