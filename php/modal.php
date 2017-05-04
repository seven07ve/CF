<?php
$dir_rel_img= 'src="../';
echo '<div id="myModal'.$data["id_noticia"].'" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">';
if ($data["tipo"] == "boletin"){
    echo "Boletín";
}
elseif ($data["tipo"] == "noticia"){
    echo "Noticia";
}
                echo ' - '.$data["titulo"].'</h3>';
if ($data["tipo"] == "boletin"){
    echo '<h5>Item: '.$data["item"].'</h5>';
}
		    echo '<h5>Publicado el: '.$data["dia"].'/'.$data["mes"].'/'.$data["ano"].'</h5>';
if ($data["tipo"] == "boletin"){
    echo '<a href="../pdf/boletines/'.$data["pdf"].'" target="_blank"><img src="imagenes/pdf.png" alt="Descarga/Download"></a>';
}
            echo '</div>
            <div class="modal-body" style="overflow: hidden">
                '.str_replace($dir_rel_img, 'src="', $data["contenido"]).'
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>';
?>