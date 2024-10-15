/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
((Drupal,once)=>{Drupal.ui_suite_bootstrap_accessibility=Drupal.ui_suite_bootstrap_accessibility||{};Drupal.ui_suite_bootstrap_accessibility.pointer_elements=['a','input'];function preventClick(element){if(Drupal.ui_suite_bootstrap_accessibility.pointer_elements.includes(element.tagName.toLowerCase())){element.setAttribute('tabindex','-1');element.setAttribute('aria-disabled','true');}else{const children=Array.from(element.children);children.forEach((child)=>{if(!child.classList.contains('pe-auto'))preventClick(child);});}}Drupal.behaviors.ui_suite_bootstrap_accessibility={attach(context){const unclickableElements=once('unclickable-element','.pe-none',context);unclickableElements.forEach(preventClick);}};})(Drupal,once);;
((Drupal,drupalSettings)=>{const activeClass='active';Drupal.behaviors.activeLinks={attach(context){const {path}=drupalSettings;const queryString=JSON.stringify(path.currentQuery);const querySelector=path.currentQuery?`[data-drupal-link-query='${queryString}']`:':not([data-drupal-link-query])';const originalSelectors=[`[data-drupal-link-system-path="${path.currentPath}"]`];let selectors;if(path.isFront)originalSelectors.push('[data-drupal-link-system-path="<front>"]');selectors=[].concat(originalSelectors.map((selector)=>`${selector}:not([hreflang])`),originalSelectors.map((selector)=>`${selector}[hreflang="${path.currentLanguage}"]`));selectors=selectors.map((current)=>current+querySelector);const activeLinks=context.querySelectorAll(selectors.join(','));const il=activeLinks.length;for(let i=0;i<il;i++)activeLinks[i].classList.add(activeClass);},detach(context,settings,trigger){if(trigger==='unload'){const activeLinks=context.querySelectorAll(`[data-drupal-link-system-path].${activeClass}`);const il=activeLinks.length;for(let i=0;i<il;i++)activeLinks[i].classList.remove(activeClass);}}};})(Drupal,drupalSettings);;
((Drupal)=>{Drupal.Charts=Drupal.Charts||{};Drupal.Charts.Configs=Drupal.Charts.Configs||[];Drupal.Charts.Contents=class{constructor(){const charts_elements=document.querySelectorAll('[data-chart]');charts_elements.forEach(function(el){const id=el.getAttribute('id');Drupal.Charts.Configs[id]=JSON.parse(el.getAttribute('data-chart'));Drupal.Charts.Configs[id].drupalChartDivElement=el;Drupal.Charts.Configs[id].drupalChartDivId=id;});}initialize(id){const event=new CustomEvent('drupalChartsConfigsInitialization',{detail:Drupal.Charts.Configs[id]});Drupal.Charts.Configs[id].drupalChartDivElement.dispatchEvent(event);}static update(id,data){if(Drupal.Charts.Configs.hasOwnProperty(id))Drupal.Charts.Configs[id]=data;}getData(id){if(Drupal.Charts.Configs.hasOwnProperty(id)){this.initialize(id);return Drupal.Charts.Configs[id];}return {};}};})(Drupal);;
