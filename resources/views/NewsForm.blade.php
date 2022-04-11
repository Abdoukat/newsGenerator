@yield('form')
<body>
    
    <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form method="post" action="{{ url('/NewsForm')}}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>News numéro :</label>
                            <input type="text" class="N_N" name="num_news" width="90px" id="num_news" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h1> Article 1 :</h1><br>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" name="tags_1" id="tags_1" value="">
                        </div>

                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" class="form-control" name="titre_1" id="titre_1" value="">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" class="form-control" name="image_1" id="image_1" value="">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description_1" id="description_1" rows="4" value=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Lien</label>
                            <input type="text" class="form-control" name="lienB_1" id="lienB_1" value="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h1> Article 2 :</h1><br>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" name="tags_2" id="tags_2" value="">
                        </div>

                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" class="form-control" name="titre_2" id="titre_2" value="">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" class="form-control" name="image_2" id="image_2" value="">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description_2" id="description_2" rows="4" value=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Lien button</label>
                            <input type="text" class="form-control" name="lienB_2" id="lienB_2" value="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h1> Article 3 :</h1><br>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" name="tags_3" id="tags_3" value="">
                        </div>

                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" class="form-control" name="titre_3" id="titre_3" value="">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" class="form-control" name="image_3" id="image_3" value="">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description_3" id="description_3" rows="4" value=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Lien button</label>
                            <input type="text" class="form-control" name="lienB_3" id="lienB_3" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h1> Article 4 :</h1><br>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="tags_4" id="tags_4" value="">
                    </div>

                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre_4" id="titre_4" value="">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description_4" id="description_4" rows="4" value=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Lien button</label>
                        <input type="text" class="form-control" name="lienB_4" id="lienB_4" value="">
                    </div>
                </div>
                <div class="col-6">
                    <h1> Article 5 :</h1><br>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="tags_5" id="tags_5" value="">
                    </div>

                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" class="form-control" name="titre_5" id="titre_5" value="">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description_5" value="" id="description_5" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Lien button</label>
                        <input type="text" class="form-control" name="lienB_5" value="" id="lienB_5">
                    </div>
                </div>

                
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark  mt-3">
            <a href="{{ route('news_go') }}" class="btn btn-primary mt-3" target="blank">Voir la news </a>
            <a href="{{ route('upd_show') }}" class="btn btn-warning mt-3">Modifier </a>
            <a href="#" class="btn btn-info mt-3 float-right">Télécharger </a>
            
            

            

            
            


            
            
        </form>
    </div>
</body> 