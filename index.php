<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>REM Grid</title>

        <link rel="stylesheet" href="/dist/css/rem-grid.css">
    </head>

    <body>
        <section>
            <div class="rg-wrapper">
                <div class="rg-row">
                    
                    <?php // 12 cols - one row ?>
                    <?php for ($i = 0; $i < 12; $i++): ?>
                    <div class="rg-col rg-col-xs-1">
                        <div class="box">
                        </div>
                    </div>
                    <?php endfor; ?>
                    
                </div>

                <?php // two columns for six rows ?>
                <?php for ($i = 0; $i < 6; $i++): ?>
                <div class="rg-row">
                    <div class="rg-col rg-col-xs-<?= $i + 1; ?>">
                        <div class="box">
                        </div>
                    </div> 

                    <div class="rg-col rg-col-xs-<?= 11 - $i; ?>">
                        <div class="box">
                        </div>
                    </div>    
                </div>
                <?php endfor; ?>

                <?php // one column offset progressively for 11 rows ?>
                <?php for ($i = 0; $i < 11; $i++): ?>
                <div class="rg-row">
                    <div class="rg-col rg-col-xs-<?= 11 - $i; ?> rg-col-xs-offset-<?= $i + 1; ?>">
                        <div class="box">
                        </div>
                    </div>  
                </div>
                <?php endfor; ?>

                <?php // two columns, push-pulled progressively for 11 rows ?>
                <?php for ($i = 0; $i < 11; $i++): ?>
                <div class="rg-row">
                    <div class="rg-col rg-col-xs-<?= 11 - $i; ?> rg-col-xs-push-<?= $i + 1; ?>">
                        <div class="box">
                        </div>
                    </div>

                    <div class="rg-col rg-col-xs-<?= $i + 1; ?> rg-col-xs-pull-<?= 11 - $i; ?>">
                        <div class="box box-pull">
                        </div>
                    </div>  
                </div>
                <?php endfor; ?>

            </div>
        </section>
    </body>
</html>