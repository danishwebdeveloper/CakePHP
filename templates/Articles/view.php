<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><?php echo $article->title; ?></td>
            <td><?php echo $article->body; ?></td>
            <td>Created at: <?php echo $article->created ?></td>
            <td><?php echo $this->Html->link('Edit', ['action' => 'edit', $article->slug]); ?></td>
            <td><?=$this->Form->postLink(
    'Delete',
    ['action' => 'delete', $article->slug],
    ['confirm' => 'Are you sure?']);
?>
            </td>
        </tr>
    </tbody>
</table>