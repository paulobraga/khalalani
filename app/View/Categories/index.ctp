<section id="content" class="container_12 clearfix" data-sort=true>
    <?php
    echo $this->Session->flash();
    ?>
    <div class="grid_12">
        <div class="box">

            <div class="header">
                <h2><?php echo __('Categories'); ?></h2>
            </div>

            <div class="content">

                <div class="tabletools">
                    <div class="left">
                        <a class="open-add-category-dialog" href="javascript:void(0);"><i class="icon-plus"></i><?php echo __('New Category'); ?></a>
                    </div>
                    <div class="right"></div>
                </div>
                <table class="dynamic styled with-prev-next" data-table-tools='{"display":true}'>
                    <thead>
                        <tr>
                            <th><?php echo __('id'); ?></th>
                            <th><?php echo __('name'); ?></th>
                            <th><?php echo __('description'); ?></th>
                            <th><?php echo __('created'); ?></th>
                            <th><?php echo __('modified'); ?></th>
                            <th><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
                                <td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
                                <td><?php echo h($category['Category']['description']); ?>&nbsp;</td>
                                <td><?php echo h($category['Category']['created']); ?>&nbsp;</td>
                                <td><?php echo h($category['Category']['modified']); ?>&nbsp;</td>
                                <td class="center">
                                    <a href="<?php echo $this->Html->url(array('action' => 'edit', $category['Category']['id']));?>" class="button small grey tooltip" data-gravity=s title="Edit"><i class="icon-pencil"></i></a>
                                    <?php echo $this->Form->postLink('<i class="icon-remove"></i>', array('action' => 'delete', $category['Category']['id']), array('class'=>'button small grey tooltip','data-gravity'=>'s','title'=>'Remove','escape'=>false), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div><!-- End of .content -->

        </div><!-- End of .box -->
    </div><!-- End of .grid_12 -->
</section>
<script>
$(document).ready(function () {

    function exportTableToCSV($table, filename) {

        var $rows = $table.find('tr:has(td)'),

            // Temporary delimiter characters unlikely to be typed by keyboard
            // This is to avoid accidentally splitting the actual contents
            tmpColDelim = String.fromCharCode(11), // vertical tab character
            tmpRowDelim = String.fromCharCode(0), // null character

            // actual delimiter characters for CSV format
            colDelim = '","',
            rowDelim = '"\r\n"',

            // Grab text from table into CSV formatted string
            csv = '"' + $rows.map(function (i, row) {
                var $row = $(row),
                    $cols = $row.find('td');

                return $cols.map(function (j, col) {
                    var $col = $(col),
                        text = $col.text();

                    return text.replace('"', '""'); // escape double quotes

                }).get().join(tmpColDelim);

            }).get().join(tmpRowDelim)
                .split(tmpRowDelim).join(rowDelim)
                .split(tmpColDelim).join(colDelim) + '"',

            // Data URI
            csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

        $(this)
            .attr({
            'download': filename,
                'href': csvData,
                'target': '_blank'
        });
    }

    // This must be a hyperlink
    $(".DTTT_button_csv").live('click', function (event) {
        // CSV
        
        exportTableToCSV.apply(this, [$('table.dynamic'), 'export.csv']);
        
        // IF CSV, don't do event.preventDefault() or return false
        // We actually need this to be a typical hyperlink
    });
});
</script>
<?php echo $this->Element('dialog_add_category'); ?>
