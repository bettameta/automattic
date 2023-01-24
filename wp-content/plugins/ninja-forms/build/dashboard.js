(()=>{"use strict";var e={n:n=>{var a=n&&n.__esModule?()=>n.default:()=>n;return e.d(a,{a}),a},d:(n,a)=>{for(var s in a)e.o(a,s)&&!e.o(n,s)&&Object.defineProperty(n,s,{enumerable:!0,get:a[s]})},o:(e,n)=>Object.prototype.hasOwnProperty.call(e,n)};const n=window.wp.domReady;var a=e.n(n);const s=window.wp.element,r=window.wp.i18n,t=window.wp.components,o=()=>{const e="undefined"!=typeof ninja_forms_admin_dashboard_data&&void 0!==ninja_forms_admin_dashboard_data.pluginDir?ninja_forms_admin_dashboard_data.pluginDir.concat("ninja-forms/assets/img/promotions/dashboard-user-management.png"):"";return(0,s.createElement)(t.Card,{className:"widget"},(0,s.createElement)(t.CardHeader,null,(0,s.createElement)("h2",null,(0,r.__)("User Access allow you to manage who can see and edit form submissions from an easy to use control panel.","ninja-forms"))),(0,s.createElement)(t.CardBody,null,(0,s.createElement)("h3",null,(0,r.__)("Grant or restrict access for :","ninja-forms")),(0,s.createElement)("ul",{className:"nf-dashboard-user-access-ul-a"},(0,s.createElement)("li",{key:"nf-dashboard-user-access-li-a1"},(0,s.createElement)("h4",null,(0,r.__)("Viewing submissions","ninja-forms"))),(0,s.createElement)("li",{key:"nf-dashboard-user-access-li-a2"},(0,s.createElement)("h4",null,(0,r.__)("Editing submissions","ninja-forms"))),(0,s.createElement)("li",{key:"nf-dashboard-user-access-li-a3"},(0,s.createElement)("h4",null,(0,r.__)("Set permissions by user role","ninja-forms"))),(0,s.createElement)("li",{key:"nf-dashboard-user-access-li-a4"},(0,s.createElement)("h4",null,(0,r.__)("Let users edit their submissions","ninja-forms"))),(0,s.createElement)("li",{key:"nf-dashboard-user-access-li-a5"},(0,s.createElement)("h4",null,(0,r.__)("Delegate submission management","ninja-forms")))),(0,s.createElement)("h3",null,(0,r.__)("User Access controls are just one of the many things you can do with the User Management add-on!","ninja-forms")),(0,s.createElement)("div",{className:"nf-dashboard-user-access-button"},(0,s.createElement)(t.Button,{className:"nf-button primary",text:(0,r.__)("Get User Management","ninja-forms"),href:"https://ninjaforms.com/extensions/user-management/?utm_source=Ninja+Forms+Plugin&utm_medium=Dashboard+User+Access",target:"_blank",icon:"admin-collapse",iconPosition:"right"}))),(0,s.createElement)(t.CardFooter,null,(0,s.createElement)(t.CardMedia,null,(0,s.createElement)("figure",null,(0,s.createElement)("figcaption",null,(0,r.__)("User Access Control Panel","ninja-forms")),(0,s.createElement)("img",{className:"nf-user-access-dasboard-screenshot",src:e,alt:(0,r.__)("Ninja Forms User Management Submissions Access settings screenshot","ninja-forms")})))))};a()((()=>{l(),c.observe(document.getElementById("ninja-forms-dashboard"),{subtree:!0,childList:!0})}));const c=new MutationObserver((function(e){e.forEach((e=>{e.addedNodes.forEach((e=>{"nf-user-access-settings-anchor"==e.id&&ninja_forms_admin_dashboard_data.load_user_management&&i()}))}))})),i=()=>{(0,s.render)((0,s.createElement)(o),document.getElementById("nf-user-access-settings-anchor"))},l=()=>{jQuery(document).ajaxComplete((()=>{"#user-access"===window.location.hash&&m(),jQuery('a[href="#user-access"]').on("click",(e=>{e.preventDefault(),m()}))}))},m=()=>{jQuery("nav.sections a.active").removeClass("active"),jQuery("nav.sections .user-access a").addClass("active"),"#user-access"!==window.location.hash&&(window.location.hash="user-access"),jQuery("#ninja-forms-dashboard > div > .content > div")[0].innerHTML='<div id="nf-user-access-settings-anchor"></div>'}})();