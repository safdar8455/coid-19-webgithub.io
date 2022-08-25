<style type = "text/css">
    
    html {
    scroll-behavior: smooth;
    }

    .row{
        margin-right: 0;
        margin-left: 0;
    }

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;

    }


    .nav_style{
        background-color: #a29bfe !important;
    }
    
    .nav_style a{ 
        color: white !important;
    }
    
    .nav-item {
        padding-right: 1.5rem; 

    }

    /* /////////////// Main Header \\\\\\\\\\\\\\ */
    .main_header{
        width: 100%;
    }

    .rightside h1{
        font-size: 3rem;
    }

    .corona_rotate img{
        animation: coronaRotate 3s linear infinite;
    }

    .leftside img{
        animation: hartbeat 5s linear infinite;
    }

    @keyframes hartbeat{
        0%{
            transform: scale(.75);
        }
        20%{
            transform: scale(1);
        }
        40%{
            transform: scale(.75);
        }
        60%{
            transform: scale(1);
        }
        80%{
            transform: scale(.75);
        }
        100%{
            transform: scale(1);
        }
    }

    @keyframes coronaRotate{
        0%{
            transform: rotate(0);
        }
        100%{
            transform: rotate(360deg);
        }
    }

    /* ************************* Corona Latest Update ******************* */

    .corona_update{
        margin: 0 0 30px 0;
    }

    .corona_update h3{
        color: #ff7675;
    }

    .corona_update h1{
        font-size: 2rem;
        text-align: center;
    }

    /* ***************** About Section *************** */

    .sub_section{
        background-color: #fbfafd;
    }

      /* ***************** contact Section *************** */

      .block{
        display: block;
      }

      /* *************** Footer **************** */
      .footer_style{
        background-color: #a29bfe !important;
      }
      .footer_style p{
        margin-bottom: 0 !important;
      }

      /* ************ top scroll *************** */
      #myBtn{
        display: none;
        position: fixed;
        bottom: 30px;
        right: 40px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #00a8ff;
        color: white;
        cursor: pointer;
        padding: 20px;
        border-radius: 30px;
      }

      #myBtn:hover{
        background-color: #606060;
      }

      .navbar-toggler-icon{
        color: white !important;
      }

      

      @media screen and (max-width: 768px) {
        
        
        .udates-data{
            padding-top: 2.5rem;
            display: flex;
            flex-direction: column;
          }

          .main_header{
            width: 80%;
            margin: auto;
        }

        .about-img{
            margin-left: 0 !important;
        }

        .rightside h1{
            margin-top: 2rem;
            text-align: center;
            font-size: 3.2rem;
        }
      }

</style>