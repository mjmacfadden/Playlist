<?php
    include 'header.php';
    include 'nav.php';
?>

<!-- HERO SECTION-->
<div class="px-4 py-5 text-center bg-light">
    <h1 class="display-1 mb-5">90s Jams</h1>
</div>


<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4 my-3">
            <img
                src="img/90s-jams.jpg"
                class="img-fluid cover-art"
                alt="Placeholder"
            />
            <div class="py-2 text-end">
                <i class="bi bi-arrow-left-right pointer" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>   
                <a href="https://open.spotify.com/playlist/37i9dQZF1DXbTxeAdrVG2l?si=NsIdiTIrQ3-wGksnOLwsnQ" target="_blank" class="spotify">
                    <i class="bi bi-spotify" alt="Listen on Spotify" title="Listen on Spotify"></i>
                </a>
            </div>
        </div>
        <div class="col-md-8 my-3 bg-light p-0 player">
            <div class="loading">
                <div class="spinner-grow mx-2" role="status"></div>
                <div class="spinner-grow mx-2" role="status"></div>
                <div class="spinner-grow mx-2" role="status"></div>
            </div>
            <div class="embed">
                <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DXbTxeAdrVG2l?utm_source=generator" width="100%" height="100%" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
    
            </div>
        </div>    
    </div>
</div>

<?php
    include 'modal.php';
    include 'footer.php';
?>