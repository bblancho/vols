<?php require __DIR__.'/Layouts/app_layout.php'; ?>

<body class="bg-sc">

    <!-- Section derecherche  -->
    <section>
        <div class="m-0 p-0 w-100 d-inline-block h-50" style="width: 100vw; height: 500px">
            <!-- <img src="https://images.unsplash.com/photo-1519012505673-26635fc56af3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" 
                alt="Toronto Pearson International Airport, Mississauga, Canada"
                class="img-fluid w-100 overflow-hidden"> -->
                <div class="w-100"  style="width: 100vw;">
                    <div class="row">
                        <div class="col m-0 p-0"  style="width: 100vw">
                            <div class="card bg-white shadow p-4">
                                <!-- Alert  -->
                                <div class="card-body text-center">
                                    <h5 class="card-title">Résevez votre prochain vol</h5>
                                </div>

                                <div class="card-body">
                                    <form action="/recherche" id="search_form" method="post" class="d-flex flex-wrap align-items-end">
                                        <div class="form-group mr-2 p-2 flex-fill">
                                            <div class="col mb-3">
                                                <label for="depart" class="form-label fw-bold">Ville de départ</label>
                                                <input type="text" class="form-control" name="depart" id="depart" placeholder="Paris..." required autocomplete="true">
                                            </div>
                                        </div>
                                        <div class="form-group mr-2 p-2 flex-fill">
                                            <div class="col mb-3">
                                                <label for="destination" class="form-label fw-bold">Votre destination</label>
                                                <input type="text" class="form-control" name="arrivee" id="destination" placeholder="New York..." required autocomplete="true" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group mr-2 p-2 flex-fill">
                                            <div class="col mb-3">
                                                <label for="date_depart" class="form-label fw-bold">Date de départ</label>
                                                <input type="date" class="form-control" name="date_depart" id="date_depart">
                                            </div>
                                        </div>
                                        <div class="form-group mr-2 p-2 flex-fill">
                                            <div class="col mb-3">
                                                <label for="date_retour" class="form-label fw-bold">Date de retour</label>
                                                <input type="date" class="form-control" name="date_retour" id="date_retour">
                                            </div>
                                        </div>
                                        <div class="form-group mr-2 p-2 flex-fill">
                                            <div class="col mb-3">
                                                <label for="passager" class="form-label fw-bold">Nombre de passger</label>
                                                <input type="number" class="form-control" name="passager" id="passager">
                                            </div>
                                        </div>
                                        <div class="form-group mr-2 p-2 ms-auto">
                                            <div class="col mb-3">
                                                <button type="submit" class="btn btn-primary fw-bold px-5">Rechercher</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
        </div>

    </section>

    <!-- Section des résultats départ  -->
    <?php 
        if (! empty($vols)) {
    ?>
    <section>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col">
                    <div class="card shadow bg-white p-5 overflow-auto">
                        <div class="card-title">
                            <h5>Départs</h5>
                        </div>
                        <div class="alert alert-warning hidden" role="alert" id="alert">
                          Ajouter votre retour en bas afin de finaliser la réservation
                        </div>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="fw-bold">N° Vol:</th>
                                    <th class="fw-bold">Départ de :</th>
                                    <th class="fw-bold">Destination :</th>
                                    <th class="fw-bold">Date de départ :</th>
                                    <th class="fw-bold">Prix :</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($vols as $vol) {
                                ?>
                                    <tr>
                                        <td><?= $vol['numero'] ?></td>
                                        <td><?= $vol['depart'] ?></td>
                                        <td><?= $vol['arrivee'] ?></td>
                                        <td><?= $vol['date_depart'] ?></td>
                                        <td><?= number_format($vol['prix'], 2, ',', ' ') . ' €'; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success float-end" id="<?= $vol['id'] ?>" 
                                                onclick="reserverDepart(<?= $vol['id'] ?>)">
                                                Réserver
                                            </button>
                                        </td>
                                    </tr>
                                <?php 
                                }?>
                            </tbody>
                        </table>
                        <!-- Pagination  -->
                        <div class="d-flex justify-content-end mt-4">
                            <ul class="pagination">
                                <li class="page-item">
                                    <?php 
                                        if($page > 1) { 
                                            $previous_page = $page - 1;
                                        
                                    ?>
                                    <a class="page-link" href="?page=<?= $previous_page ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    <?php } ?>
                                    
                                </li>
                                <?php 
                                    for ($i=0; $i < $nombre_pages; $i++) { 
                                        # code...
                                ?>
                                <li class="page-item"><a class="page-link" href="?page=<?= $i+1 ?>" <?php if($page == $i+1) { ?> style="pointer-events: none" <?php } ?>><?= $i+1 ?></a></li>
                                <?php 
                                    }
                                    if($page < $nombre_pages) {
                                        $next_page = $page + 1;
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= $next_page ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php } ?>

    <!-- Section des résultats retour  -->
    <?php 
        if (! empty($vols_retour)) {
    ?>
    <section>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col">
                    <div class="card shadow bg-white p-5 overflow-auto">
                        <div class="card-title">
                            <h5>Retours</h5>
                        </div>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="fw-bold">N° Vol:</th>
                                    <th class="fw-bold">Départ de :</th>
                                    <th class="fw-bold">Destination :</th>
                                    <th class="fw-bold">Date de retour :</th>
                                    <th class="fw-bold">Prix :</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($vols_retour as $vol) {
                                ?>
                                    <tr>
                                        <td><?= $vol['numero'] ?></td>
                                        <td><?= $vol['depart'] ?></td>
                                        <td><?= $vol['arrivee'] ?></td>
                                        <td><?= $vol['date_depart'] ?></td>
                                        <td><?= number_format($vol['prix'], 2, ',', ' ') . ' €'; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success float-end" id="<?= $vol['id'] ?>"
                                                onclick="reserverRetour(<?= $vol['id'] ?>)">
                                                Réserver
                                            </button>
                                        </td>
                                    </tr>
                                <?php 
                                }?>
                            </tbody>
                        </table>
                        <!-- Pagination  -->
                        <div class="d-flex justify-content-end mt-4">
                            <ul class="pagination">
                                <li class="page-item">
                                    <?php 
                                        if($page > 1) { 
                                            $previous_page = $page - 1;
                                        
                                    ?>
                                    <a class="page-link" href="?page=<?= $previous_page ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    <?php } ?>
                                    
                                </li>
                                <?php 
                                    for ($i=0; $i < $nombre_pages; $i++) { 
                                        # code...
                                ?>
                                <li class="page-item"><a class="page-link" href="?page=<?= $i+1 ?>" <?php if($page == $i+1) { ?> style="pointer-events: none" <?php } ?>><?= $i+1 ?></a></li>
                                <?php 
                                    }
                                    if($page < $nombre_pages) {
                                        $next_page = $page + 1;
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= $next_page ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    <!-- Voyageur info Modal -->
    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="reservationModalLabel">Information client</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="alert alert-danger hidden" role="alert" id="modalAlert">
                Vous devez ajouter un départ avant!
            </div>
            <form action="/reservation" method="post" id="modalForm">
                <input type="hidden" name="depart_id" id="depart_id">
                <input type="hidden" name="retour_id" id="retour_id">
                <input type="hidden" name="nombre_passager" id="nombre_passager">
                <div class="mb-3">
                    <label for="nom" class="col-form-label">Nom:</label>
                    <input type="text" name="nom" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="col-form-label">Prénom:</label>
                    <input type="text" name="prenom" class="form-control" id="prenom">
                </div>
                <div class="mb-3">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="col-form-label">Téléphone:</label>
                    <input type="text" name="phone" class="form-control" id="phone">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="submit" form="modalForm" class="btn btn-primary" id="modalButton">Enregistrer les informations</button>
        </div>
        </div>
    </div>
    </div>

    </section>
    <?php } ?>
    <!-- Boostrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     
    <!-- Script ajax -->
    <script>
        const form = document.getElementById('search_form');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Empêcher la soumission normale du formulaire
            const formData = new FormData(form); // Créer un objet FormData à partir du formulaire
            const url = form.action; // Récupérer l'URL de l'action du formulaire
            const xhr = new XMLHttpRequest(); // Créer une instance XMLHttpRequest
            xhr.open('POST', url, true); // Configurer la requête
            xhr.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) { // Vérifier si la requête a abouti
                    const response = JSON.parse(this.responseText); // Récupérer la réponse
                    // Faire quelque chose avec la réponse, par exemple remplacer le contenu de la page:
                    // document.body.innerHTML = response;
                    const url = new URL('/', window.location);
                    // Set the search parameter values from the form inputs
                    url.searchParams.set('page', response.page);
                    url.searchParams.set('limit', response.limit);
                    url.searchParams.set('depart', response.depart);
                    url.searchParams.set('arrivee', response.arrivee);
                    url.searchParams.set('date_depart', response.date_depart);
                    url.searchParams.set('date_retour', response.date_retour);
                    url.searchParams.set('passager', response.passager);

                    // Redirect to the new URL
                    window.location.href = url.toString();
                }
            };
            xhr.send(formData); // Envoyer la requête avec les données du formulaire
        });

        let departId = localStorage.getItem("depart_id");

        let lastDepartButton;

        if( departId ) {
            localStorage.removeItem("depart_id");
        }

        // Ajouter le départ
        function reserverDepart(depart_id) {
            
            localStorage.setItem("depart_id", depart_id);

            const alert = document.getElementById('alert');
            
            const action_button = document.getElementById(depart_id);

            if (lastDepartButton) {
                lastDepartButton.removeAttribute('disabled');
            }

            alert.classList.remove('hidden');
            action_button.setAttribute('disabled', true);
            return lastDepartButton = action_button;

        }

        // Ajouter le retour
        function reserverRetour(retour_id){
            let departId = localStorage.getItem("depart_id");
            const modalAlert = document.getElementById('modalAlert');
            const modalButton = document.getElementById('modalButton');
            const nombre_passager = document.getElementById('nombre_passager');

            let departIdInput = document.getElementById('depart_id');
            let retourIdInput = document.getElementById('retour_id');
            
            if (!departId) {
                modalAlert.classList.remove('hidden');
                modalButton.setAttribute('disabled', true);
            } else {
                modalAlert.classList.add('hidden');
                modalButton.removeAttribute('disabled', true);

            }

            const urlParams = new URLSearchParams(window.location.search);
            const passager = urlParams.get('passager');

            departIdInput.value = departId;
            retourIdInput.value = retour_id;
            nombre_passager.value = passager;

            // Ouvrir le modal du formulaire 
            openModal();
        }

        function openModal() {
            var reservationModal = new bootstrap.Modal(document.getElementById('reservationModal'), {
                keyboard: false
            });

            reservationModal.show();
        }

    </script>
</body>
</html>