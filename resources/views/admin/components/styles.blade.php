<style>



.dataTables_wrapper .advertisement-listing td {
    text-align: left;
    vertical-align: middle;
}

.dataTables_wrapper .apikey-listing td {
    text-align: left;
    vertical-align: middle;
}

.dataTables_wrapper .country-listing td {
    text-align: left;
    vertical-align: middle;
}


.dataTables_wrapper .file-listing td {
    text-align: left;
    vertical-align: middle;
}



.dataTables_wrapper .visitor-listing td {
    text-align: center;
    vertical-align: middle;
}

/** actions btn set **/
.table-listing td:last-of-type {
    
    min-width: 0px !important;
    justify-content: flex-start !important;
}

div.dataTables_wrapper div.dataTables_length select,
div.dataTables_wrapper div.dataTables_filter input,
input[type="date"].form-control,
.field-radius{

    border-radius: 4px !important;
}


.table-listing thead th {
    font-size: 15px;
    border: none;
    font-weight: 600;
    vertical-align: middle !important;

}

.table-listing td {
    font-size: 15px;
}

label{
    color: #404040 !important;
}

.table-responsive{
    overflow-y: hidden;
    padding-bottom: 12px;
}

body::-webkit-scrollbar,
.modal-open .modal::-webkit-scrollbar,
.table-responsive::-webkit-scrollbar {
  width: 9px; 
  height: 9px;
}

body::-webkit-scrollbar-track,
.modal-open .modal::-webkit-scrollbar-track,
.table-responsive::-webkit-scrollbar-track {
  border: transparent;
}

body::-webkit-scrollbar-thumb,
.modal-open .modal::-webkit-scrollbar-thumb,
.table-responsive::-webkit-scrollbar-thumb {
  background-color: lightgrey;
  border-radius: 4px;
  border: 2px solid transparent; 
  transition: background-color 0.2s; 
}

body::-webkit-scrollbar-thumb:hover,
.table-responsive::-webkit-scrollbar-thumb:hover  {
  background-color: grey; 
}

.card{
    border: none !important;
    background-color: transparent !important;
}

.card-body{
    background-color: white;
}

.font-weight-bold{
    font-weight: 600px !important;
    font-size: 15px;
}

.ml-2{
    color: black;
}


/** profile **/
.circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    color: #fff;
    background: #06060670;
}

.about{
    width: auto;
    height: 100px;
    overflow-x: hidden;
    overflow-y: auto;
    text-align: justify;
    padding-right: 12px;
}

.letters{
        padding: 28px 8px 28px 8px;
        font-size: 38px;
    }

.image-frame {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden; 
    position: relative;
}

.circle-image {
    width: 100%;
    height: 100%;
    object-fit: cover; 
}



.mt{
    margin-top: 20px !important;

}


.accordion-button:focus {
    border-color: none !important;
    box-shadow: none !important;
}

.accordion-button:not(.collapsed) {
    color: #d1a229 !important;
    font-weight: 500 !important;
    background-color: white !important;
    box-shadow: none !important;
}

.accordion-button::after {
    background-image: url('data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="red"%3e%3cpath fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"%3e%3c/svg%3e') !important;
}

.border-none{
    border: 0px solid white !important;
    font-weight: 500 !important;
}


hr{
    border-top:none !important;
}




.header {
    background-image: url('{{@$data->country->flag_url}}');
    background-size: cover; 
    background-repeat: no-repeat; 
    /* background-attachment: fixed; */
   
    /* height: 300px;  */


    /* position: fixed;
    top: 0;
    left: 0;
    opacity: 0.5;*/
    width: 100%;
    height: 100%; 
    /* background-size: cover;
    background-repeat: no-repeat;  */
    background-position: center;
}


.flag-frame{
    width: 220px;
    height: 130px;
    border-radius: 10%;
    overflow: hidden; 
    position: relative;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; 
}

.map{
    font-size: 90px;
    border-bottom: 1px solid #7d7d7d8f;

}


.file-icon{
    font-size: 60px;
    color: lightskyblue;

}

.font-size{
    font-size: 23px;
}


.inner{
    color: white !important;
}


body.modal-open::after {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backdrop-filter: blur(5px); 
        z-index: 999; 
    }


.modal-header{
    background: #e2e8f0;
    padding-bottom: 0px !important;
}

.modal-body{
    padding: 1rem 2rem !important;
}

label{
    color: #000000ba !important;
    font-size: 15px !important;
    font-weight: 500 !important;
}






    

    

.modal-footer {
    border-top: none !important;
}

.small-box {
    padding: 28px;
    border-radius: 25px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.small-box-footer {
    text-decoration: none;
    color: white;
}

.small-box-footer:hover {
    color: rgb(162, 162, 162);
}


.bg-image{
    position: fixed;
    top: 0;
    left: 0;
    opacity: 0.5;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    transition: background-image 0.5s ease;
}

.bg-image::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgb(219 219 219 / 52%), rgb(155 134 134 / 49%))
    
}

/* .pull-right{
    margin-top: 20px;
}


main.main {
    margin-top: 0px !important;
} */

/* .card, 
.card-header,
.table tbody tr
{
   background-color: transparent !important;
} */


/* .table tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.3) !important; 
    color: black !important;
} */
/* 
.card,.table td,
.table-listing td{
    border: none !important;
} */
/* 
label.h6,
.dataTables_wrapper label{

    color: black;
}

form#filter-form{
    margin-bottom: 50px;
} */

</style>