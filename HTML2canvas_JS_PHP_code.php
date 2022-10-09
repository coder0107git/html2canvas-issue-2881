<div id="previewImg"></div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    let fragment = new DocumentFragment();
    let fragmentDiv = document.createElement("div");
    fragmentDiv.setAttribute("id", "svgimage");

    fetch("SVG3.svg").then(response => response.text()).then(res => {
        fragmentDiv.innerHTML = res;
        fragment.append(fragmentDiv);
        document.append(fragment);
    }).catch(e => {
        throw new Error(e.stack);
    });
</script>
<script>
//HTML2canvas JS code start
if ($(window).width() > 1919) {
    $('#svgimage svg').attr('viewBox', '0 150 3000 2200');
} else {
    $('#svgimage svg').attr('viewBox', '0 0 2500 1720');
}
$('#svgimage').css('display', 'inline-block');
$('#svgimage svg').css('width', '100%');

html2canvas(document.getElementById("svgimage"), {
    width: 650,
    height: 550
}).then(function (canvas) {
    document.getElementById("previewImg").appendChild(canvas);
    /*$('#svgimage svg').attr('viewBox', '0 0 2000 1720');
    $('#svgimage').css('display', 'flex');
    $('#svgimage svg').css('width', '68%');*/
});
//HTML2canvas JS code end
</script>

/*<?php
//HTML2canvas image save PHP code start
//image_save_ajax.php AJAX call code
/*$image = $_POST['imgBase64'];
$current_table = $_POST['current_table'];

if($image && $current_table) {
    $img = $image;
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    file_put_contents('assets/table_images/'.$current_table.'.png', $data);

    echo "success";
} else {
    echo "error";
}*/
//HTML2canvas image save PHP code end
?>*/