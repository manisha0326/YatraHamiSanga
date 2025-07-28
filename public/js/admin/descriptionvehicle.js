const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } = CKEDITOR;
        const { FormatPainter } = CKEDITOR_PREMIUM_FEATURES;

        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                licenseKey: '<YOUR_LICENSE_KEY>',
                plugins: [ Essentials, Bold, Italic, Font, Paragraph, FormatPainter ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                    'formatPainter'
                ]
            } )
            .then( /* ... */ )
            .catch( /* ... */ );


            ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });