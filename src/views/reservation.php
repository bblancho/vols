<?php require __DIR__.'/Layouts/app_layout.php'; ?>

<body class="bg-sc">
    <!-- Section resrvation  -->
    <section>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col">
                    <div class="card shadow bg-white p-5 overflow-auto">
                        <div class="card-title">
                            <h5><strong>N° Réservation: </strong><?= $results[0]['numero']?> </h5>
                            <h5><strong>Passager: </strong><?= $results[0]['nom'].' '.$results[0]['prenom'];?> </h5>
                            <h5><strong>Email: </strong><?= $results[0]['email'];?> </h5>
                            <h5><strong>Téléphone: </strong><?= $results[0]['phone'];?> </h5>
                        </div>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="fw-bold">Passager:</th>
                                    <th class="fw-bold">Départ de :</th>
                                    <th class="fw-bold">Destination :</th>
                                    <th class="fw-bold">Date de départ :</th>
                                    <th class="fw-bold">Nombre de passegers:</th>
                                    <th class="fw-bold">Prix :</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $results[0]['nom'].' '.$results[0]['prenom']; ?></td>
                                    <td><?= $results[0]['depart']; ?></td>
                                    <td><?= $results[0]['arrivee']; ?></td>
                                    <td><?= $results[0]['date_depart']; ?></td>
                                    <td><?= $results[0]['nombre_passager']; ?></td>
                                    <td><?= number_format($results[0]['prix'], 2, ',', ' ') . ' €'; ?></td>
                                </tr>
                            </tbody>
                        </table>  
                        <hr/>   
                        <div class="card-title">
                            <h5><strong>N° Réservation: </strong><?= $results[1]['numero']?> </h5>
                            <h5><strong>Passager: </strong><?= $results[0]['nom'].' '.$results[0]['prenom'];?> </h5>
                            <h5><strong>Email: </strong><?= $results[0]['email'];?> </h5>
                            <h5><strong>Téléphone: </strong><?= $results[0]['phone'];?> </h5>
                        </div>                   
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="fw-bold">Passager:</th>
                                    <th class="fw-bold">Retour de :</th>
                                    <th class="fw-bold">Destination :</th>
                                    <th class="fw-bold">Date de retour :</th>
                                    <th class="fw-bold">Nombre de passegers:</th>
                                    <th class="fw-bold">Prix :</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                    <td><?= $results[1]['nom'].' '.$results[1]['prenom']; ?></td>
                                    <td><?= $results[1]['depart']; ?></td>
                                    <td><?= $results[1]['arrivee']; ?></td>
                                    <td><?= $results[1]['date_depart']; ?></td>
                                    <td><?= $results[1]['nombre_passager']; ?></td>
                                    <td><?= number_format($results[1]['prix'], 2, ',', ' ') . ' €';; ?></td>
                               </tr>
                            </tbody>
                        </table>
                        <hr/>                        
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="fw-bold text-end">Prix Total: <strong><?= number_format($results[0]['prix'] + $results[1]['prix'], 2, ',', ' ') . ' €'; ?></strong></th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                    <td></td>
                               </tr>
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Boostrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</body>
</html>