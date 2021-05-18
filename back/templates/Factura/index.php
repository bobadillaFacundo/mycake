<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $factura
 */
?>
<div class="factura index content">
    <?= $this->Html->link(__('New Factura'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Factura') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idPedido') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('precioTotal') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($factura as $factura): ?>
                <tr>
                    <td><?= $this->Number->format($factura->idPedido) ?></td>
                    <td><?= $this->Number->format($factura->numero) ?></td>
                    <td><?= $this->Number->format($factura->precioTotal) ?></td>
                    <td><?= h($factura->fecha) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $factura->numero]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $factura->numero]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $factura->numero], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->numero)]) ?>
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
