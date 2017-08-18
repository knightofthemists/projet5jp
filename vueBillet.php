<?php $billet['titre']; ?>

<article>
    <header>
        <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
        <time><?= $billet['date_creation'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
</article>
<hr />

<?php require 'gabarit.php'; ?>