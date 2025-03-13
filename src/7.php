 <?php 
function getRandomColor() {
    $colors = array('ff0000', '00ff00', '0000ff');
    return $colors[array_rand($colors)];
}
?>