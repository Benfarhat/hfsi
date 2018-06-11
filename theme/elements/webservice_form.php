            <div class="row">
              <h2 class="titre animated slideInLeft webservice_title"><?= get_theme_mod('webservice_title', 'Vos résultats de laboratoire') ?></h2>
            </div>
            <div class="row mt-3 animated slideInLeft">
              <div class="col-sm-12">
                <div class="card bg-light">
                  <div class="card-body">
                      <form method="post" action="<?= admin_url( 'admin-post.php' ) ?>">
                        <input type="hidden" name="action" value="webservice_form">
                        <?php wp_nonce_field( 'webservice_form_action', 'webservice_form_'. ( date( "Y" ) * 2 - date( "m" ) * 3 ) ) ; ?>
                          <div class="form-row">
                            <?php
                            $fields = json_decode(get_theme_mod('webservice_fields'));
                            foreach($fields as $field) : ?>
                            <div class="form-group col-md-12">
                              <label for="numanalyse"><?= $field->{'label'} ?></label>
                              <input type="<?= $field->{'type'} ?>" class="form-control <?= $field->{'class'} ?>" id="<?= hfsi_create_slug($field->{'fieldname'}) ?>" name="<?= hfsi_create_slug($field->{'fieldname'}) ?>" placeholder="<?= $field->{'placeholder'} ?>">
                            </div>
                            <?php endforeach; ?>
                            <?php
                            /*
                            <div class="form-group col-md-12">
                              <label for="numanalyse">Numéro des analyses</label>
                              <input type="text" class="form-control" id="numanalyse" name="numanalyse" placeholder="Numéro des analyses">
                            </div>

                            <div class="form-group col-md-12">
                              <label for="identifiant">Matricule</label>
                              <input type="text" class="form-control" id="identifiant" name="identifiant" placeholder="Votre identifiant">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="date_analyse">Date des analyses</label>
                              <input type="text" class="form-control" id="date_analyse" name="date_analyse" placeholder="Cliquer pour afficher le calendrier">

                            </div>
                            */ ?>
                          </div>
                          <button type="submit" class="btn btn-success webservice_button_title"><?= get_theme_mod('webservice_button_title', 'Consulter') ?></button>
                        </form>

                  </div>
                </div>
              </div>
            </div>
<?php
/*
            <!--

            <div class="row mt-4">
                <h2 class="titre animated slideInLeft">Infos</h2>
              </div>
            <div class="row mt-3 animated slideInLeft">
                <div class="col-sm-6">
                  <div class="card bg-success">
                    <div class="card-body">
                      <h5 class="card-title text-white">Urgences</h5>
                      <div class="text-center text-white">
                        <h3 class="card-text">24heures/24</h3>
                        <h3 class="card-text">7jours/7</h3>
                      </div>
                      <a href="#" class="mt-2 btn btn-outline-light">Lire ...</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Horaires de travail</h5>
                      <table class="table table-hover table-sm">
                          <thead>
                            <tr>
                              <th scope="col">Jour</th>
                              <th scope="col">De</th>
                              <th scope="col">à</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Lundi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Mardi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Mercredi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Jeudi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Vendredi</th>
                              <td>07:00</td>
                              <td>13:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Samedi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

        -->
        */
?>
