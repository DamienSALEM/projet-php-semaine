<?php
class DefaultController
{
    public function render(string $pathView, array $params = []) {
        ob_start();
        extract($params);
        require __ROOT__."/templates/$pathView.php";
        $content = ob_get_clean();
        require __ROOT__."/templates/base.php";
    }

    public function redirectToRoute($path) {
        header("Location: $path");
    }
}
