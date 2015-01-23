<div class="menu">
            <a href="../" class="portfol">PORTFOLIO</a><br>
            <a href="/about">ABOUT</a><br>
            <a href="/contacts">CONTACTS</a>
        </div>
        <div class="portfolio">
            Here is the website layout: <br>
            <a href="/images/sites/<?php
                foreach($data as $row)
                    if($row['ID'] == $id) {
                        echo $row['Picture'].'"><img src="/images/sites/'.$row['Picture'];
            ?>" width="500px"></a><br>
            Here you can download html-code:<br>
            <a href="<?php echo $row['Archive']; } ?>">DOWNLOAD</a>
        </div>