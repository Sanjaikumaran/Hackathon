<?php

include $_SERVER['DOCUMENT_ROOT'].'/__lib/main.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Hackathon' 23</title>
  <link 
      rel="shortcut icon"
      href="/assets/images/logo/H-logo.png"
      type="image/x-icon"
    />
  <link rel="stylesheet" href="/assets/css/animate.css" />
  <link rel="stylesheet" href="/assets/css/tailwind1.css" />

  <!-- ==== WOW JS ==== -->
  <script src="/assets/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
 <script> 
 function memForm() {
    var count = document.getElementById("membCount").value ;
    var member3 = document.getElementById('member3').style;
    var member4 = document.getElementById('member4').style
    // var val=document.getElementById("membCount").value ;
    if(count==2){
      member3.display="none";
      member4.display="none";
    }else if(count==3){
      member3.display="block";
      member4.display="none";

    }else{
      member3.display="block";
      member4.display="block";


    }
    }
    var drp_val,formid;
    function deptForm(drp_val,formid){
      var dept = document.getElementById(drp_val).value;
      var deptForm = document.getElementById(formid).style;
     
      if(dept != "Others"){
        deptForm.display="none";
      }else if(dept == "Others"){
        deptForm.display="block";
      }else{
        return true;
      }

    }
  </script>
</head>

<body>
<?load_template('header')?>
  <!-- ====== Banner Section Start -->
  <div class="relative z-10 overflow-hidden bg-primary pt-[120px] pb-[100px] md:pt-[130px] lg:pt-[160px]">
  <br>
  <div class="text-center">
  <h2
                class="mb-4 text-3xl font-bold text-white text-dark sm:text-4xl md:text-[42px]"
              >
                Registration Form
              </h2>
              <p
                class="text-lg leading-relaxed  text-[#e4e4e4] sm:text-xl sm:leading-relaxed"
              >
Fill the form below to get registered for Hackathon' 23.
              </p>
  </div>
    <div>
      <span class="absolute top-0 left-0 z-[-1]">
        <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
          <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
          <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white"
            stroke-opacity="0.08" stroke-width="12" />
        </svg>
      </span>
      <span class="absolute top-0 right-0 z-[-1]">
        <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
          <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
          <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white"
            stroke-opacity="0.06" stroke-width="13" />
        </svg>
      </span>
    </div>
  </div>
  <!-- ====== Banner Section End -->

  <!-- ====== Forms Section Start -->
  <section class="bg-[#F4F7FF] py-14 lg:py-20">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div
            class="wow fadeInUp relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white py-14 px-8 text-center sm:px-12 md:px-[60px]"
            data-wow-delay=".15s">
            <div class="mb-10 text-center">
              <a href="javascript:void(0)" class="mx-auto inline-block max-w-[160px]">
                <img src="/assets/images/logo/logo-bg.png" style="border-radius:10px;" alt="logo" />
              </a>
            </div>
            <div>
              <form method="post" action="upload.php" enctype="multipart/form-data">
                <div class="div-left">
                  <div class="mb-6">
                    <input required type="text" name="institution" placeholder="Institution Name"
                      class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
                  </div>
                  <div class="mb-6">
                    <input required type="text" name="team_name" placeholder="Team Name"
                      class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
                  </div>
                  <div class="mb-6">
                    <input required type="text" name="project_title" placeholder="Project Title"
                      class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
                  </div>
                  <div class="mb-6">

                    <select name="domain_selected"
                      class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" required>
                      <option value="Artificial Intelligence">Artificial Intelligence</option>
                      <option value="Machine Learning">Machine Learning</option>
                      <option value="Big Data">Big Data</option>
                      <option value="Drone Technology">Drone Technology</option>
                      <option value="Block Chain">Block Chain</option>
                      <option value="Internet of Things">Internet of Things</option>
                      <option value="Open Elective">Open Elective</option>
                      <option value="none" selected disabled hidden>Select Your Track</option>

                    </select>
                  </div>
                  <div class="mb-6">
                    <textarea required style="resize: none;" type="text" name="problem_statement" placeholder="Problem Statement"
                      class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none"></textarea>
                  </div>
                  <div class="mb-6">

                    <select required name="no_of_members" id="membCount" onchange="memForm()"
                      class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="none" disabled hidden selected>Select No. of Members(exclude TL)</option>

                    </select>
                  </div>
                </div>
                </div>
                 <div  class="div-right">
                 <h1>Team Lead Details</h1><br>
                <div class="mb-6">
                <input required type="text" name="teamlead_name" placeholder="Team Lead Name"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
                </div>
                <div class="mb-6">

                <select required name="teamlead_dept" onchange="deptForm('teamlead_dept','TLdept')" id="teamlead_dept"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="BioTech Engineering">BioTech Engineering</option>
                  <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="Electronics and Communication Engineering">Electronics and Communication Engineering
                  </option>
                  <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                  <option value="MechanicalEngineering">Mechanical Engineering</option>
                  <option value="Artificial Intelligence and Datascience">Artificial Intelligence and Datascience
                  </option>
                  <option value="Civil Engineering">Civil Engineering</option>
                  <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                  <option value="Automobile Engineering">Automobile Engineering</option>
                  <option value="Power Electronics">Power Electronics</option>
                  <option value="Others">Others</option>
                  <option value="none" selected disabled hidden>Select Your Department</option>

                </select>
               </div>
               <div style="display: none;" id="TLdept"class="mb-6">
                <input type="text" value="" name="teamlead_dept_other" placeholder="Team Lead Department"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <div class="mb-6">
                <select required name="teamlead_year"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="1st Year">1st Year</option>
                  <option value="2nd Year">2nd Year</option>
                  <option value="3rd Year">3rd Year</option>
                  <option value="Final Year">Final Year</option>
                  <option value="none" selected disabled hidden> Select Your Year</option>


                </select>
                </div>
                <div class="mb-6">
                <input required type="number" name="teamlead_contact" placeholder="Team Lead Contact Number"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
                </div>
               <div class="mb-6">
                <input required type="email" name="teamlead_mail" placeholder="Team Lead Email"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <h1>Team Member Details</h1><br>

               <h3>Member One Details</h3><br>
               <div class="mb-6">
                 <input required type="text" placeholder="Name" name="member1_name"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <div class="mb-6">

                <select required name="member1_dept" onchange="deptForm('member1Dept','MemberOnedept')" id="member1Dept"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="BioTech Engineering">BioTech Engineering</option>
                  <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="Electronics and Communication Engineering">Electronics and Communication Engineering
                  </option>
                  <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                  <option value="MechanicalEngineering">Mechanical Engineering</option>
                  <option value="Artificial Intelligence and Datascience">Artificial Intelligence and Datascience
                  </option>
                  <option value="Civil Engineering">Civil Engineering</option>
                  <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                  <option value="Automobile Engineering">Automobile Engineering</option>
                  <option value="Power Electronics">Power Electronics</option>
                  <option value="Others">Others</option>
                  <option value="none" selected disabled hidden>Select Your Department</option>

                </select>
               </div>
               <div style="display: none;" id="MemberOnedept"class="mb-6">
                <input type="text" value="" name="member1_dept_other" placeholder="Enter Your Department"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <div class="mb-6">
                <select required name="member1_year"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="1st Year">1st Year</option>
                  <option value="2nd Year">2nd Year</option>
                  <option value="3rd Year">3rd Year</option>
                  <option value="Final Year">Final Year</option>
                  <option value="none" selected disabled hidden>Select Your Year</option>


                </select>
               </div>
               <h3>Member Two Details</h3><br>

               <div class="mb-6">
                <input required type="text" placeholder="Name" name="member2_name"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <div class="mb-6">

                 <select required name="member2_dept" onchange="deptForm('member2Dept','MemberTwodept')" id="member2Dept"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="BioTech Engineering">BioTech Engineering</option>
                  <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="Electronics and Communication Engineering">Electronics and Communication Engineering
                  </option>
                  <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                  <option value="MechanicalEngineering">Mechanical Engineering</option>
                  <option value="Artificial Intelligence and Datascience">Artificial Intelligence and Datascience
                  </option>
                  <option value="Civil Engineering">Civil Engineering</option>
                  <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                  <option value="Automobile Engineering">Automobile Engineering</option>
                  <option value="Power Electronics">Power Electronics</option>
                  <option value="Others">Others</option>
                  <option value="none" selected disabled hidden>Select Your Department</option>

                </select>
               </div>
               <div style="display: none;" id="MemberTwodept"class="mb-6">
                <input type="text" value="" name="member2_dept_other" placeholder="Enter Your Department"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <div class="mb-6">
                <select required name="member2_year"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="1st Year">1st Year</option>
                  <option value="2nd Year">2nd Year</option>
                  <option value="3rd Year">3rd Year</option>
                  <option value="Final Year">Final Year</option>
                  <option value="none" selected disabled hidden>Select Your Year</option>


                </select>
               </div>
               <div id="member3">
               <h3>Member Three Details</h3><br>

               <div class="mb-6">
                <input type="text" value="" placeholder="Name" name="member3_name"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <div class="mb-6">

                <select  name="member3_dept" value="" onchange="deptForm('member3Dept','MemberThreedept')" id="member3Dept"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="BioTech Engineering">BioTech Engineering</option>
                  <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="Electronics and Communication Engineering">Electronics and Communication Engineering
                  </option>
                  <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                  <option value="MechanicalEngineering">Mechanical Engineering</option>
                  <option value="Artificial Intelligence and Datascience">Artificial Intelligence and Datascience
                  </option>
                  <option value="Civil Engineering">Civil Engineering</option>
                  <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                  <option value="Automobile Engineering">Automobile Engineering</option>
                  <option value="Power Electronics">Power Electronics</option>
                  <option value="Others">Others</option>
                  <option value="none" selected disabled hidden>Select Your Department</option>

                </select>
               </div>
               <div style="display: none;" id="MemberThreedept"class="mb-6">
                <input type="text" value="" name="member3_dept_other" placeholder="Enter Your Department"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <div class="mb-6">
                <select  value="" name="member3_year"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="1st Year">1st Year</option>
                  <option value="2nd Year">2nd Year</option>
                  <option value="3rd Year">3rd Year</option>
                  <option value="Final Year">Final Year</option>
                  <option value="none" selected disabled hidden>Select Your Year</option>


                </select>
               </div></div>
               <div id="member4">
               <h3>Member Four Details</h3><br>

               <div class="mb-6">
                <input type="text" value="" placeholder="Name" name="member4_name"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <div class="mb-6">

                <select value="" name="member4_dept" onchange="deptForm('member4Dept','MemberFourdept')" id="member4Dept"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="BioTech Engineering">BioTech Engineering</option>
                  <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="Electronics and Communication Engineering">Electronics and Communication Engineering
                  </option>
                  <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                  <option value="MechanicalEngineering">Mechanical Engineering</option>
                  <option value="Artificial Intelligence and Datascience">Artificial Intelligence and Datascience
                  </option>
                  <option value="Civil Engineering">Civil Engineering</option>
                  <option value="Aeronautical Engineering">Aeronautical Engineering</option>
                  <option value="Automobile Engineering">Automobile Engineering</option>
                  <option value="Power Electronics">Power Electronics</option>
                  <option value="Others">Others</option>
                  <option value="none" selected disabled hidden>Select Your Department</option>

                </select>
               </div>
               <div style="display: none;" id="MemberFourdept"class="mb-6">
                <input value="" type="text" name="member4_dept_other" placeholder="Enter Your Department"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" />
               </div>
               <div class="mb-6">
                <select value="" name="member4_year"
                  class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none">
                  <option value="1st Year">1st Year</option>
                  <option value="2nd Year">2nd Year</option>
                  <option value="3rd Year">3rd Year</option>
                  <option value="Final Year">Final Year</option>
                  <option value="none" selected disabled hidden>Select Your Year</option>
                </select>
               </div>

                </div>
                <div class="mb-6">
                <h3>ID Card</h3><br>

                 <input required id="file_btn" type="file" id="myfile" class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none transition focus:border-primary focus-visible:shadow-none" name="fee_proof" multiple>
                </div>

               <div class="mb-10" id="regis_btn">
                <input style="background-color: rgb(48 86 211 / var(--tw-bg-opacity))" type="submit"
                  class="bordder-primary w-full cursor-pointer rounded-md border bg-primary py-3 px-5 text-base text-white transition duration-300 ease-in-out hover:shadow-md" />
               </div>
              </form>
            </div>
         


            <div>
              <span class="absolute top-1 right-1">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="1.39737" cy="38.6026" r="1.39737" transform="rotate(-90 1.39737 38.6026)"
                    fill="#3056D3" />
                  <circle cx="1.39737" cy="1.99122" r="1.39737" transform="rotate(-90 1.39737 1.99122)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="38.6026" r="1.39737" transform="rotate(-90 13.6943 38.6026)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="1.99122" r="1.39737" transform="rotate(-90 13.6943 1.99122)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="38.6026" r="1.39737" transform="rotate(-90 25.9911 38.6026)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="1.99122" r="1.39737" transform="rotate(-90 25.9911 1.99122)"
                    fill="#3056D3" />
                  <circle cx="38.288" cy="38.6026" r="1.39737" transform="rotate(-90 38.288 38.6026)" fill="#3056D3" />
                  <circle cx="38.288" cy="1.99122" r="1.39737" transform="rotate(-90 38.288 1.99122)" fill="#3056D3" />
                  <circle cx="1.39737" cy="26.3057" r="1.39737" transform="rotate(-90 1.39737 26.3057)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="26.3057" r="1.39737" transform="rotate(-90 13.6943 26.3057)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="26.3057" r="1.39737" transform="rotate(-90 25.9911 26.3057)"
                    fill="#3056D3" />
                  <circle cx="38.288" cy="26.3057" r="1.39737" transform="rotate(-90 38.288 26.3057)" fill="#3056D3" />
                  <circle cx="1.39737" cy="14.0086" r="1.39737" transform="rotate(-90 1.39737 14.0086)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="14.0086" r="1.39737" transform="rotate(-90 13.6943 14.0086)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="14.0086" r="1.39737" transform="rotate(-90 25.9911 14.0086)"
                    fill="#3056D3" />
                  <circle cx="38.288" cy="14.0086" r="1.39737" transform="rotate(-90 38.288 14.0086)" fill="#3056D3" />
                </svg>
              </span>
              <span class="absolute left-1 bottom-1">
                <svg width="29" height="40" viewBox="0 0 29 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2.288" cy="25.9912" r="1.39737" transform="rotate(-90 2.288 25.9912)" fill="#3056D3" />
                  <circle cx="14.5849" cy="25.9911" r="1.39737" transform="rotate(-90 14.5849 25.9911)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="25.9911" r="1.39737" transform="rotate(-90 26.7216 25.9911)"
                    fill="#3056D3" />
                  <circle cx="2.288" cy="13.6944" r="1.39737" transform="rotate(-90 2.288 13.6944)" fill="#3056D3" />
                  <circle cx="14.5849" cy="13.6943" r="1.39737" transform="rotate(-90 14.5849 13.6943)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="13.6943" r="1.39737" transform="rotate(-90 26.7216 13.6943)"
                    fill="#3056D3" />
                  <circle cx="2.288" cy="38.0087" r="1.39737" transform="rotate(-90 2.288 38.0087)" fill="#3056D3" />
                  <circle cx="2.288" cy="1.39739" r="1.39737" transform="rotate(-90 2.288 1.39739)" fill="#3056D3" />
                  <circle cx="14.5849" cy="38.0089" r="1.39737" transform="rotate(-90 14.5849 38.0089)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="38.0089" r="1.39737" transform="rotate(-90 26.7216 38.0089)"
                    fill="#3056D3" />
                  <circle cx="14.5849" cy="1.39761" r="1.39737" transform="rotate(-90 14.5849 1.39761)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="1.39761" r="1.39737" transform="rotate(-90 26.7216 1.39761)"
                    fill="#3056D3" />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Forms Section End -->

  <? load_template('footer')?>
  <!-- ====== Footer Section End -->

  <!-- ====== Back To Top Start -->
  <a href="javascript:void(0)"
    class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark">
    <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
  </a>
  <!-- ====== Back To Top End -->

 <!-- ====== All Scripts -->
  <script src="/assets/js/main.js"></script>
</body>

</html>