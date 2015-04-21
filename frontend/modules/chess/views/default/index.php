<style>

</style>
<table class="game_board">
    <thead>
        <tr>
            <td class="header_col"></td>
            <?php for($header = 65;$header<73; $header++): ?>
                <td class="header_col">
                    <?= chr($header) ?>
                </td>
            <?php endfor;?>
        </tr>
    </thead>
<?php for($row = 0;$row<8; $row++): ?>
    <tr class="<?= ($row%2 == 1) ? 'odd' : 'even'?>">
        <td class="header_row">
            <?= $row+1 ?>
        </td>
        <?php for($col = 0;$col<8; $col++): ?>
            <td class="tile">

            </td>
        <?php endfor;?>
    </tr>
<?php endfor;?>
</table>