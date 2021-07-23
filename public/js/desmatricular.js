var asignaturasMatriculadasCheck = [];
$(document).ready(function() {
    $(".desmatricular").on("click", function() {
        desMatricular();
    });
});

function desMatricular() {
    asignaturasMatriculadasCheck.pop();
    total = $("input[name=checkDesmatricular]:checked").length;
    if (total > 0) {
        $("input[name=checkDesmatricular]:checked").each(function() {
            asignaturasMatriculadasCheck.push(this.value);
        });

        $.ajax({
            url: path_desMatricular,
            method: "POST",
            data: {
                ids: asignaturasMatriculadasCheck,
            },
            dataType: "json",
            success: function(respuesta) {
                window.location.reload();
            },
        })
    }
}