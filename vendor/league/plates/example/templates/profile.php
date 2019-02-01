<?php $this->layout('layout', ['title' => 'Registration Profile']) ?>

<h1>User Profile</h1>
<p>Hello, <?=$this->e($name)?>!</p>

<?php $this->insert('sidebar') ?>

<?php $this->push('scripts') ?>
    <script>
        // Some JavaScript
    </script>
<?php $this->end() ?>