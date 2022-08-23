<h1>Hello First View</h1>
<h3><?php echo $this->Html->link('Add New Article', ['action' => 'add']) ?></h3>
<table>

    <thead>
        <tr>
            <th>
                Title
            </th>
            <th>
                Created
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article): ?>
        <tr>
            <td>
                <?php echo $this->Html->link($article->title, ['action' => 'view', $article->slug]); ?>
            </td>
            <td>
                <?php echo $article->created->format(DATE_RFC822) ?>
            </td>
            <td>
                <?php echo $this->Html->link('Edit', ['action' => 'edit', $article->slug]); ?>
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>
