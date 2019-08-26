$(function(){
    $('#link').hide();
    $('#action').hide();
    $('#testCheck').hide();
    var lienKet =  $('#lienKet').val();
    if($('#menuEdit').val() > 0 && lienKet != ''){
        $('#link').show();
        $('#action').show();
    }
    $('#menuEdit').change(function(){
        var link = $(this).val();
        if(link == 0){
            $('#level').val(0);
            $('#link').hide(600);
            $('#action').hide(600);
            $('#testCheck').hide(600);
            $('#checkCo').attr('checked', true);
            $('#link').html('<label>Link</label><input id="link" type="text" value="" class="form-control" name="link">');
        }else{
            $.get("/quanlyhethong/menu/action/"+link,function(data){
                $('#level').val(Number(data)+1);
                $('#checkKo').attr('checked', false);
                $('#link').hide(600);
                $('#action').hide(600);
                if($('#level').val() == 1){
                    $('#testCheck').show(600);
                    $('input[type="radio"]').click(function(){
                        if ($("#checkCo").is(':checked')){
                            $('#link').hide(600);
                            $('#action').hide(600);
                            $('#link').html('<label>Link</label><input id="link" type="text" value="" class="form-control" name="link">');
                        }
                        if($("#checkKo").is(':checked')){
                            $('#action').show(600);
                            $('#link').show(600);
                            $('#link').html('<label>Link</label><input id="link" type="text" value="'+lienKet+'" class="form-control" name="link" required>');
                        }
                    });
                }else if($('#level').val() == 2){
                    $('#checkCo').attr('checked', true);
                    $('#action').show(600);
                    $('#link').show(600);
                    $('#testCheck').hide(600);
                    $('#link').html('<label>Link</label><input id="link" type="text" value="'+lienKet+'" class="form-control" name="link" required>');
                }
            });
        }
    });
    if($('#level').val()==1 && lienKet == ''){
        $('#testCheck').show();
        $('#checkCo').attr('checked', true);
    }else if($('#level').val()==1 && lienKet != ''){
        $('#testCheck').show();
        $('#checkKo').attr('checked', true);
    }
    $('input[type="radio"]').click(function(){
        if ($("#checkCo").is(':checked')){
            $('#link').hide(600);
            $('#action').hide(600);
            $('#link').html('<label>Link</label><input id="link" type="text" value="" class="form-control" name="link">');
        }
        if($("#checkKo").is(':checked')){
            $('#action').show(600);
            $('#link').show(600);
            $('#link').html('<label>Link</label><input id="link" type="text" value="'+lienKet+'" class="form-control" name="link" required>');
        }
    });
    if($('#level').val() == 2){
        $('#checkKo').attr('checked', true);
        $('#action').show(600);
        $('#link').show(600);
        $('#testCheck').hide(600);
        $('#link').html('<label>Link</label><input id="link" type="text" value="'+lienKet+'" class="form-control" name="link" required>');
    }
    if($('#level').val()==0){
        $('#checkCo').attr('checked', true);
    }
    $('#menuCha').change(function(){
        $('#link').html('<label>Link</label><input id="link" type="text" class="form-control" name="link">');
        var link = $(this).val();
        if(link == 0){
            $('#level').val(0);
            $('#link').hide(600);
            $('#action').hide(600);
            $('#testCheck').hide(600);
            $('#checkCo').attr('checked', true);
        }else{
            $.get("/quanlyhethong/menu/action/"+link,function(data){
                $('#level').val(Number(data)+1);
                $('#checkKo').attr('checked', false);
                $('#link').hide(600);
                $('#action').hide(600);
                if($('#level').val() == 1){
                    $('#testCheck').show(600);
                    $('input[type="radio"]').click(function(){
                        if ($("#checkCo").is(':checked')){
                            $('#link').hide(600);
                            $('#action').hide(600);
                        }
                        if($("#checkKo").is(':checked')){
                            $('#action').show(600);
                            $('#link').show(600);
                            $('#link').html('<label>Link</label><input id="link" type="text" class="form-control" name="link" required>');
                        }
                    });
                }else if($('#level').val() == 2){
                    $('#checkCo').attr('checked', true);
                    $('#testCheck').hide(600);
                    $('#action').show(600);
                    $('#link').show(600);
                    $('#link').html('<label>Link</label><input id="link" type="text" class="form-control" name="link" required>');
                }
            });
        }
    });
});