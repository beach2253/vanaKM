{{-- show single document --}}
<x-app-layout>

    <x-slot name="header">
        <a href="/document">back </a>
        <h2>{{ $document['title'] }}</h2>
        <code>{{ $document['type'] }}</code>
        <p>{{ $document['discription'] }}</p>
    </x-slot>

    <script type="text/javascript" src="https://unpkg.com/pdf-lib/dist/pdf-lib.min.js"></script>
    <script type="text/javascript" src="https://www.jsdelivr.com/package/npm/pdfjs-dist"></script>

@php
    $file = $document->file_location ? asset('/storageDemo/' . $document->file_location) : asset('/storageDemo/' . $document->file_location);

    PDF::SetAuthor('ruttaphong');
    PDF::SetTitle('TCPDF Example');
    PDF::SetSubject('TCPDF Tutorial');
    PDF::SetKeywords('TCPDF, PDF, example, test, guide');


    // Add a page
    // This method has several options, check the source code documentation for more information.
    PDF::AddPage();

    // Set some content to print
    $html = "<h1>hello World</h1>";

    // Print text using writeHTMLCell()
    PDF::writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

    // ---------------------------------------------------------

    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    // PDF::Output('example_065.pdf', 'E');

    // $pdfHeader=PDF::Output('rand.pdf', 'E');
    $pdfBlob=PDF::Output('example_065.pdf', 'E');
        

@endphp

    {{-- <canvas id="the-canvas"></canvas> --}}

    <iframe id="frame" class="w-full h-screen" frameborder="0"></iframe>


<script type="text/javascript">
    // var loadingTask = pdfjsLib.getDocument('{{$file}}');
    // loadingTask.promise.then(function(pdf) {
    //     // you can now use *pdf* here
    //     console.log(loadingTask)
    // });


    const {
        degrees,
        PDFDocument,
        rgb,
        StandardFonts
    } = PDFLib

    const url = "{{ $file }}"
    console.log("hello" + url)
    const renderInIframe = (pdfBytes) => {
        console.log('render')
        const blob = new Blob([pdfBytes], {
            type: 'application/pdf'
        });
        const blobUrl = URL.createObjectURL(blob);
        document.getElementById('frame').src = blobUrl;
        console.log()
    };
    modifyPdf();

    async function modifyPdf() {
        console.log(url)
        const existingPdfBytes = await fetch(url).then(res => res.arrayBuffer())

        const pdfDoc = await PDFDocument.load(existingPdfBytes)
        const helveticaFont = await pdfDoc.embedFont(StandardFonts.Helvetica)
        pdfDoc.setTitle
        const pages = pdfDoc.getPages('test title')

        const {width,height} = pages[0].getSize()
        for(page in pages){
            console.log(page);
            pages[page].drawText('For view on website only', {
                x: width/2 - 200,
                y: height/2 + 200,
                size: 50,
                font: helveticaFont,
                color: rgb(0.95, 0.1, 0.1),
                rotate: degrees(-45),
            })
        }
        // const firstPage = pages[0]

        // firstPage.drawText('For view on website only', {
        //     x: width/2 - 200,
        //     y: height/2 + 200,
        //     size: 50,
        //     font: helveticaFont,
        //     color: rgb(0.95, 0.1, 0.1),
        //     rotate: degrees(-45),
        // })
        // const secPage = pages[1]
        // secPage.drawText('For view on website only', {
        //     x: width/2 - 200,
        //     y: height/2 + 200,
        //     size: 50,
        //     font: helveticaFont,
        //     color: rgb(0.95, 0.1, 0.1),
        //     rotate: degrees(-45),
        // })



        /********************** Print Metadata **********************/

        console.log('Title:', pdfDoc.getTitle());
        console.log('Author:', pdfDoc.getAuthor());
        console.log('Subject:', pdfDoc.getSubject());
        console.log('Creator:', pdfDoc.getCreator());
        console.log('Keywords:', pdfDoc.getKeywords());
        console.log('Producer:', pdfDoc.getProducer());
        console.log('Creation Date:', pdfDoc.getCreationDate());
        console.log('Modification Date:', pdfDoc.getModificationDate());

        /********************** Export PDF **********************/

        const pdfBytes = await pdfDoc.save()
        renderInIframe(pdfBytes);
    }
</script>
</x-app-layout>
