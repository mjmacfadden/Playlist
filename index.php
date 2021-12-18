<?php
    include 'header.php';
?>

<!-- HERO SECTION-->
<div class="px-4 py-5 text-center video-container">
    <video id="background-video" autoplay loop muted playsinline poster="">
      <source src="img/header4.mp4" type="video/mp4">
    </video>
    <h1 class="display-1 mt-3 mb-2 text-light text-shadow-md">Paraffin Playlists</h1>
    <p class="lead mb-5 fw-bold">Mixes that you really own on the WAX Blockchain.</p>
    <div class="col-lg-6 mx-auto">
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="builder.php">
        <button
            type="button"
            class="btn btn-light btn-lg px-4 gap-3 btn-outline-secondary semi-transparent"
        >
            Mint One Now
        </button>
        </a>
    </div>
    </div>
    <img src="img/wax_logo.png" class="wax-logo mt-5" />
</div>

<!-- HOW TO -->
<div class="bg-dark text-light py-5">
    <div class="container how-to py-5">
    <div class="row text-center">
        <div class="col-sm-4 px-5">
        <i class="bi bi-brush"></i>
        <h5>Design Cover Art</h5>
        <p>Use your favorite design tool to create cover art. We suggest using <a href="https://canva.com" title="Canva" target="_blank">Canva</a>.</p>
        </div>
        <div class="col-sm-4 px-5">
        <i class="bi bi-file-music"></i>
        <h5>Build a Playlist</h5>
        <p>Use apps like Spotify or SoundCloud to build a playlist with your favorite songs.</p>
        </div>
        <div class="col-sm-4 px-5">
        <i class="bi bi-arrow-up-circle"></i>
        <h5>Mint NFT</h5>
        <p>Mint your NFT Playlist to the WAX Blockchain.</p>
        </div>
    </div>
    </div>
</div>

<!-- FEATURED -->
<div class="container my-5">
    <div class="row">
        <h2>Featured</h2>
    </div>
    <div class="row text-center">
        <div class="col-md-4 col-sm-6 my-3">
            <a href="featured.php">
                <img
                    src="img/90s-jams.jpg"
                    class="img-fluid cover-art"
                    alt="Placeholder"
                />
            </a>
        </div>
        <div class="col-md-4 col-sm-6 my-3">
            <img
                src="img/holiday-mix.gif"
                class="img-fluid cover-art"
                alt="Placeholder"
            />
        </div>
        <div class="col-md-4 col-sm-6 my-3">
            <img
                src="img/into-the-void.jpg"
                class="img-fluid cover-art"
                alt="Placeholder"
            />
        </div>
        <div class="col-md-4 col-sm-6 my-3">
            <img
                src="img/yacht-rock.jpg"
                class="img-fluid cover-art"
                alt="Placeholder"
            />
        </div>
        <!-- ROW 2 -->
        <div class="col-md-4 col-sm-6 my-3">
            <img
                src="img/b-sides.jpg"
                class="img-fluid cover-art"
                alt="Placeholder"
            />
        </div>
        <div class="col-md-4 col-sm-6 my-3">
            <img
                src="img/sea-shanties.png"
                class="img-fluid cover-art"
                alt="Placeholder"
            />
        </div>
    
    </div>
</div>

<?php
    include 'footer.php';
?>