<?= $this->header() ?>
<?= $this->load($this->themeUrl('assets/dist/css/zui.min.css')) ?>
<?= $this->load($this->cdn('jquery/1.11.0/jquery.min.js')) ?>
<?= $this->load($this->themeUrl('assets/css/style.css')) ?>
<meta name="keywords" content="寻路,集锦">
<meta name="description" content="总有美丽的风景让人流连">
<script>
    window.Navigator = {
        themeUrl : '<?= $this->themeUrl('',false) ?>'
    }
</script>