var asignaturasCheck = [];
var asignaturasMatriculadasCheck = [];
$(document).ready(function() {
    $(".matricular").on("click", function() {
        matricular();
    });
});

function matricular() {
    asignaturasCheck.pop();
    asignaturasMatriculadasCheck.pop();
    total = $("input[name=checkMatricular]:checked").length;
    if (total > 0) {
        $("input[name=checkMatricular]:checked").each(function() {
            asignaturasCheck.push(this.value);
        });

        $("input[name=checkDesmatricular]").each(function() {
            asignaturasMatriculadasCheck.push(this.value);
        });

        asignaturasMatriculadasCheck.forEach(element => {
            var i = asignaturasCheck.indexOf(element);
            if (i !== -1) {
                asignaturasCheck.splice(i, 1);
            }
        });


        $.ajax({
            url: path_matricular,
            method: "POST",
            data: {
                ids: asignaturasCheck,
            },
            dataType: "json",
            success: function(respuesta) {
                window.location.reload();
            },
        })
    }
}