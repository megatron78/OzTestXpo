<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->

<table class="table table-bordered">
    <?php $countTR = 0; ?>
    @foreach($transposedpre as $row)
        <?php $countTD = 0; ?>
        <tr>
            @foreach($row as $cell)
                @if($countTR === 0)
                    <th>{{ $cell }}</th>
                @else
                    @if($countTD === 0)
                        <td class="text-bold">{{ $cell }}</td>
                    @else
                        <td>{{ $cell }}</td>
                    @endif
                @endif
                <?php $countTD += 1; ?>
            @endforeach
        </tr>
        <?php $countTR += 1; ?>
    @endforeach
</table>

