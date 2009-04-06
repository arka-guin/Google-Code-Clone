<h1>AdminRoster List</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Charclass</th>
      <th>Charrace</th>
      <th>Ep</th>
      <th>Gp</th>
      <th>Priority</th>
      <th>Joined on</th>
      <th>Is active</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($roster_list as $roster): ?>
    <tr>
      <td><?php echo link_to($roster->getName(), 'adminRoster/edit?id='.$roster->getId()); ?></td>
      <td><?php echo $roster->getClasses() ?></td>
      <td><?php echo $roster->getRaces() ?></td>
      <td><?php echo $roster->getEp() ?></td>
      <td><?php echo $roster->getGp() ?></td>
      <td><?php echo $roster->getPriority() ?></td>
      <td><?php echo $roster->getJoinedMdy() ?></td>
      <td><?php echo $roster->getIsActiveStr() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('adminRoster/new') ?>">New</a>
