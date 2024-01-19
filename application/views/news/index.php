<h2><?= $title ?></h2>
<?php foreach ($news as $newsItem) {
    echo "<h3>{$newsItem['title']}</h3>";
    echo "<div class='main'>";
    echo $newsItem['text'];
    echo "</div>";
    echo "<p><a href='".site_url('news/'.$newsItem['slug']
    )."'>View article</a></p>";
}