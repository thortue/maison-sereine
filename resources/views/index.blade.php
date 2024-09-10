@extends('base')

@section('title', 'Maison Seraine - Accueil')

@section('content')
<!-- Section Accueil (Hero Banner avec Parallax) -->
<section id="accueil" class="d-flex align-items-center justify-content-center min-vh-100 bg-primary text-white parallax" style="background-image: url('https://picsum.photos/1920/1080?random=1');">
    <div class="text-center">
        <h1>Bienvenue à Maison Seraine</h1>
        <p class="lead">Votre havre de paix et sérénité.</p>
        <a href="#services" class="btn btn-light">Découvrez nos services</a>
    </div>
</section>

<!-- Section Services (Hero Banner avec Parallax) -->
<style>
    /* Effet de profondeur pour les cards */
.service-card {
    border: none; /* On enlève la bordure */
    overflow: hidden; /* Assure que les éléments ne débordent pas */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1); /* Ajout d'ombre pour la profondeur */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px); /* Légère élévation de la carte */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2), 0 14px 40px rgba(0, 0, 0, 0.2); /* Ombre plus intense */
}

/* Effet sur l'image : elle sort du cadre au hover */
.service-card img {
    transition: transform 0.3s ease;
}

.service-card:hover img {
    transform: scale(1.1); /* Zoom sur l'image */
}

/* Ajout d'un effet de profondeur supplémentaire lors du hover sur mobile */
@media (hover: none) {
    .service-card:hover img {
        transform: none;
    }
}

</style>
<style>
    $gr-1: linear-gradient(170deg, #01E4F8 0%, #1D3EDE 100%);
$gr-2: linear-gradient(170deg, #B4EC51 0%, #429321 100%);
$gr-3: linear-gradient(170deg, #C86DD7 0%, #3023AE 100%);

.gr-1 {
    background: $gr-1;
}

.gr-2 {
    background: $gr-2;
}

.gr-3 {
    background: $gr-3;
}

* {
    transition: .5s;
}

.h-100 {
    height: 100vh !important;
}

.align-middle {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

.column {
    margin-top: 3rem;
    padding-left: 3rem;
    &:hover {
        padding-left: 0;
        .card .txt {
            margin-left: 1rem;
            h1, p {
                color: rgba(255, 255, 255, 1);
                opacity: 1;
            }
        }
        a {
            color: rgba(255, 255, 255, 1);
            &:after {
                width: 10%;
            }
        }
    }
}

.card {
    min-height: 170px;
    margin: 0;
    padding: 1.7rem 1.2rem;
    border: none;
    border-radius: 0;
    color: rgba(0, 0, 0, 1);
    letter-spacing: .05rem;
    font-family: 'Oswald', sans-serif;
    box-shadow: 0 0 21px rgba(0, 0, 0, .27);
    .txt {
        margin-left: -3rem;
        z-index: 1;
        h5 {
            font-size: 1.5rem;
            font-weight: 300;
            text-transform: uppercase;
        }
        p {
            font-size: .7rem;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 0rem;
            margin-top: 33px;
            opacity: 0;
            color: rgba(255, 255, 255, 1);
        }
    }
    a {
        z-index: 3;
        font-size: .7rem;
        color: rgba(0, 0, 0, 1);
        margin-left: 1rem;
        position: relative;
        bottom: -.5rem;
        text-transform: uppercase;
        &:after {
            content: "";
            display: inline-block;
            height: 0.5em;
            width: 0;
            margin-right: -100%;
            margin-left: 10px;
            border-top: 1px solid rgba(255, 255, 255, 1);
            transition: .5s;
        }
    }
    .ico-card {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    i {
        position: relative;
        right: -50%;
        top: 60%;
        font-size: 12rem;
        line-height: 0;
        opacity: .2;
        color: rgba(255, 255, 255, 1);
        z-index: 0;
    }
}
</style>
<section id="services" class="d-flex flex-column align-items-center min-vh-100 text-dark parallax" style="background-image: url('https://picsum.photos/1920/1080?random=2'); background-color: rgba(255, 255, 255, 0.8);">
    <div class="container py-5">
        <h2 class="text-center mb-4">Nos Services</h2>
        <div class="row">
            <div class="col-md-4 column">
                <div class="card gr-1 service-card" data-aos="fade-up-right" data-aos-easing="linear" data-aos-delay="600">
                    <img src="https://picsum.photos/500/300?random=4" class="card-img-top" alt="Service Image">
                    <div class="card-body txt">
                        <h5 class="card-title">Service 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" data-aos="fade-up" >
                    <img src="https://picsum.photos/500/300?random=5" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title">Service 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" data-aos="fade-up-left" data-aos-delay="1200">
                    <img src="https://picsum.photos/500/300?random=6" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title">Service 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section Déroulement de la mise en gestion -->
<section id="deroulement" class="d-flex align-items-center justify-content-center min-vh-100 bg-secondary text-white">
    <div class="text-center">
        <h2>Déroulement de la mise en gestion</h2>
        <p class="lead">Les étapes pour mettre votre bien en gestion.</p>
        <a href="#contact" class="btn btn-light">Contactez-nous</a>
    </div>
</section>

<!-- Section Contact (Hero Banner avec Parallax) -->
<section id="contact" class="d-flex align-items-center justify-content-center min-vh-100 text-white parallax" style="background-image: url('https://picsum.photos/1920/1080?random=3');">
    <div class="text-center">
        <h2>Contactez-nous</h2>
        <p class="lead">Pour plus d'informations, n'hésitez pas à nous contacter.</p>
        <a href="#avis" class="btn btn-light">Voir les avis</a>
    </div>
</section>

<!-- Section Avis -->
<section id="avis" class="d-flex align-items-center justify-content-center min-vh-100 bg-warning text-dark">
    <div class="text-center">
        <h2>Avis des clients</h2>
        <p class="lead">Découvrez ce que nos clients disent de nous.</p>
    </div>
</section>

<!-- Footer -->
<footer class="py-4 bg-dark text-white text-center">
    <p>&copy; 2024 Maison Seraine. Tous droits réservés.</p>
</footer>
@endsection
