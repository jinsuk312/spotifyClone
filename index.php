<?php include("includes/header.php"); ?>

<h1 class="pageHeadingBig">You Might Also Like</h1>

<div class="gridViewContainer">

    <?php
    // outputs in random order
    $albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

    while ($row = mysqli_fetch_array($albumQuery)) {
        // this will lead to album page
        echo "<div class='gridViewItem'>
					<a href='album.php?id=" . $row['id'] . "'>
						<img src='" . $row['artworkPath'] . "'>

						<div class='gridViewInfo'>"
            . $row['title'] .
            "</div>
					</a>

				</div>";
    }
    ?>

</div>





<?php include("includes/footer.php"); ?>