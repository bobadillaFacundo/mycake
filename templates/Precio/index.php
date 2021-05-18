<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $precio
 */
?>
<div class="precio index content">
    <?= $this->Html->link(__('New Precio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Precio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idProducto') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('monto') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($precio as $precio): ?>
                <tr>
                    <td><?= $this->Number->format($precio->idProducto) ?></td>
                    <td><?= h($precio->fecha) ?></td>
                    <td><?= $this->Number->format($precio->monto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $precio->idProducto]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $precio->idProducto]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $precio->idProducto], ['confirm' => __('Are you sure you want to delete # {0}?', $precio->idProducto)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
