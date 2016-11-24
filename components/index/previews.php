<div class="container">

    <div class="row">

            <div ng-repeat="arti in articulos" ng-show="arti.Galeria >=1">

                <div class="col-xs-12 col-md-3">
                    <div class="thumbnail">
                        <img src="images/catalogo/sql/productos/{{arti.UrlFile}}" class="img-responsive" alt="...">
                        <div class="caption">
                            
                            <h4>{{arti.Nombre}}</h4>
                            <p>{{arti.Descripcion}}</p>
                            <p>${{arti.Costo}}</p>
                            <p>
                                <a href="./models/clsBuy.php?id={{arti.id}}" class="btn btn-primary btn-sm" role="button">Comprar</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

    </div>

</div>