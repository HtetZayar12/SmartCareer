@extends('frontendtemplate')
@section('content')
 <div class="container" style="font-family: Montserrat, sans-serif;">
     <h2 class="h3 text-center my-5">How it works</h2>
     <p class="text-center mb-5">An overview of hiring and freelancing on SmartCareer.</p>
     <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h5>Freelancer</h5>
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
           <h5 class="font-weight-bold">Step-1 Surf Projects</h5>
           <p class="text-justify">Are you a new user to Chate Sat? If so, sign up and make a unique portfolio of yours. It’s free, always will be! Did you signed up already? Then login your account in order to apply projects. We have over hundreds of projects that are posted on our website, and the number is increasing everyday. Build a competitive portfolio by adding your professional and personal information and a compelling cover letter as well to start applying on projects. Tip : In future, when a new project is opened that matches your portfolio and skills, we would let you know by sending an email to you. So, stay tuned !
           </p>
           <h5 class="font-weight-bold">Step-2 Apply Now</h5>
           <p class="text-justify">Only 3-stars to 5-starts can apply PREMIUM projects. Found the right project that fits your skills, and offers? Apply to that project right away. Make a bid. Provide the timeline and the budget that you are charging in return. Describe the facts that make you one of the best candidates to qualify for it. Tip : Make your project proposal to look cool, and attractive to stand out of other candidates.</p>
           <h5 class="font-weight-bold">Step-3 Get Hired</h5>
           <p class="text-justify">After applying the project, your potential client is going to check and shortlist the candidates. Your client is going to view your project proposal once you have applied. If you are shortlisted or got an interview request, you will be notified through an email. Tip : Do not forget to check your email timely to see the notification of the job offer or interview date and time !</p>
           <h5 class="font-weight-bold">Step-4 Start working and Earn Money</h5>
           <p class="text-justify">Once you are shortlisted and qualified for the project, you can discuss business with your client in our workroom, a place on Chate Sat where you will connect with your client during the project timeline. In workroom, you can send messages and transfer files to the client without leaving the website. And this may remain private between you and your client. Even if you are freelancing for a project that is based in the other side of the world, your payment is safe with us ! Because it’s our service for you to hold the payment once you start working on the project ! Tip : Once the project you are working is finished, your client will rate and review your work. And, then payment will be transferred to your account.</p>
      </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h5>Employer</h5>
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
               <h5 class="font-weight-bold">Step-1 Post your project</h5>
               <p class="text-justify">It's always free to register and post your project. Just post the detail requirements and descriptions of your project and Our related freelancers will be notified instantly and you'll receive proposals to your project within an hour! Or Find someone relevant for your project? Just go to their profiles and invite them to submit proposal to your project.</p>
               <h5 class="font-weight-bold">Step-2 Choose & Hire the perfect freelancer</h5>
               <p class="text-justify">Explore each applicant's portfolio and browse their previous works, ratings & reviews so you can hire with confidence. Review and compare job proposals from a variety of freelancers. Select the most suitable one and click the “Hire” button to get started. Freelancers will be notified by an email describing that they have been hired for the project.</p>
               <h5 class="font-weight-bold">Step-3 Let's collaborate!</h5>
               <p class="text-justify">Once the project is initiated, we request the payment in advance to proceed in order to guarantee our freelancers. The payment is transferred only after you approve the work is done according to the job description. You can discuss about the work and communicate with the freelancer in real time on our workroom without ever leaving our website. Our Workroom is an online workspace that allow employer and freelancers to collaborate with ease.</p>
               <h5 class="font-weight-bold">Step-4 Feedback matter to us!</h5>
               <p class="text-justify ">Once the project has been completed to your satisfaction, click ‘Mark completed’ button and you’ll be able to provide feedback to the freelancer, as well as to rate their performance on the work done. This is to give a feel for how active each freelancer is in the community and have a higher chance to get hired by another potential employer.</p>
           </div>
        </div>
      </div>
    </div>
 </div>
@endsection