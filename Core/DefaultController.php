<?php
class DefaultController
{
    public function render(string $pathView, array $params = []) {
        ob_start();
        extract($params);
        require ROOT."/templates/$pathView.php";
        $content = ob_get_clean();
        require ROOT."/templates/base.php";
    }

    public function redirectToRoute($path) {
        header("Location: $path");
    }
}
