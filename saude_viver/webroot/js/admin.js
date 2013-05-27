$(document).ready(function(){
    var ckeditor = {
        filebrowserBrowseUrl      : www+'webroot/js/kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl : www+'webroot/js/kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl : www+'webroot/js/kcfinder/browse.php?type=flash',
        filebrowserUploadUrl      : www+'webroot/js/kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl : www+'webroot/js/kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl : www+'webroot/js/kcfinder/upload.php?type=flash',        
        language : 'pt-BR',
        forcePasteAsPlainText : true,
        disableReadonlyStyling : true,
        font_defaultLabel : 'Verdana',
        font_names : 'Verdana',
        toolbar :
        [            
            { name: 'document', items : [ 'Source','-','Templates' ] },
            { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
            { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
            { name: 'tools', items : [ 'Maximize', 'ShowBlocks' ] },
            { name: 'tools_2', items : [ 'YouTube', 'Flash','PageBreak','Iframe' ] },
            '/',
            { name: 'styles', items : [ 'Styles','Format','FontSize' ] },
            { name: 'colors', items : [ 'TextColor','BGColor' ] },
            { name: 'insert', items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar' ] },
            { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
            '/',            
            { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
            { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] }                                                           
        ]
    };  
    $( '.ckeditor' ).ckeditor( ckeditor );   
});