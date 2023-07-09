<style>
    <?php include 'style.css'; ?>
</style>
<?php
$res = file_get_contents('json.json');
$data = json_decode($res, true);
function traverse($element)
{
    print_r("<ul>");
    foreach ($element as $value) {
        if (!$value['isFolder']) {
            print_r ("<li>{$value['title']}  {$value['key']}</li>");
            continue;
        }
        print_r("+ " . $value['title']);
        traverse($value['children']);
    }
    print_r("</ul>");
}
traverse($data);
?>