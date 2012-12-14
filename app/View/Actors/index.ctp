<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<table>
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Created</th>
  </tr>

  <!-- Here is where we loop through our $posts array, printing out post info -->

  <?php foreach ($actors as $actor): ?>
  <tr>
    <td><?php echo $actor['Actor']['actor_id']; ?></td>
    <td>
      <?php echo $this->Html->link($actor['Actor']['name'],
      array('controller' => 'actors', 'action' => 'view', $actor['Actor']['name'])); ?>
    </td>
    <td><?php echo $actor['Actor']['created']; ?></td>
  </tr>
  <?php endforeach; ?>
  <?php unset($post); ?>
</table>
