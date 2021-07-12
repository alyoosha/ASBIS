<table style="border-collapse: collapse; margin: auto;">
    <tbody>
        <? foreach ($data as $item) : ?>
            <tr>
                <? foreach ($item as $td) : ?>
                    <td style="padding: 5px 10px;box-shadow: inset 0 0 2px rgba(100, 100 ,100, .3)"><?= $td ?></td>
                <? endforeach; ?>
            </tr>
        <? endforeach; ?>
    </tbody>
</table>