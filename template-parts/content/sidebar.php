
<div class='flex-row' style='max-height: 275px; height: 275px; margin-bottom: 2em; max-width: 350px;' >

<ish-marker-1 href='https://wasya.co/our-services?utm_source=sidebar' >
  <div slot='thumb'
    style="width: 120px; height: 200px; background: linear-gradient(to bottom, #dcd03d, white); display: flex; flex-direction: column-reverse; align-items: center"
  >
    <img style="max-width: 120px; max-height: 120px;"
      src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2023/02/13184551/200x200-tv-rm-tiny.png"
      alt='wasya co software consulting services'
    />
  </div>
  <span slot='label' >Our Services</span>
  <img slot='icon'
    src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2023/04/10123730/32x32-tool-box-tiny.png"
    alt='wasya co software consulting services'
  />
</ish-marker-1>

<ish-marker-1 href='https://wasya.co/our-process?utm_source=sidebar' >
  <div slot='thumb'
    style="width: 120px; height: 200px; background: linear-gradient(to bottom, #dcd03d, white); display: flex; flex-direction: column-reverse; align-items: center"
  >
    <img style="max-width: 200px; max-height: 200px;"
      src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2023/04/10124048/200x200-portrait-2-tiny.png"
      alt='wasya co software consulting services'
    />
  </div>
  <span slot='label' >Our Process</span>
  <img slot='icon'
    src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2023/04/10124154/32x32-wrench-2tiny.png"
    alt='wasya co software development process'
  />
</ish-marker-1>

<ish-marker-1 href='https://piousbox.com/?utm_source=sidebar' >
  <div slot='thumb'
    style="width: 120px; height: 200px; background: linear-gradient(to bottom, #dcd03d, white); display: flex; flex-direction: column-reverse; align-items: center"
  >
    <img style="max-width: 200px; max-height: 200px;"
      src="https://piousbox.com/wp-content/themes/piousbox_wp_theme/assets/images/60x100_paladin.png"
      alt='piousbox paladin'
    />
  </div>
  <span slot='label' >Piousbox.com</span>
  <img slot='icon'
    src="https://d15g8hc4183yn4.cloudfront.net/wp-content/uploads/2023/02/01133318/32x32-ankh-tiny.png"
    alt='piousbox ankh icon'
  />
</ish-marker-1>

</div>


<template id="ish-marker-1-tmpl">
<style>
a:visited,
a:link,
a:hover,
a:active {
  text-decoration: none;
}
.shadow-14 {
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px,
    rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}
.W0 {
  height: 100%;
}
.Marker {
  /* border: 2px solid red; */

  --ish-len-sm: 5px;
  --ish-len-md: 10px;

  height: 100%;
  width: 120px;

  display: flex;

  border-radius: var(--ish-len-sm);
  background: white;
  padding: var(--ish-len-md);
  /* padding-bottom: 0; */
}
.Marker .W1 {
  /* max-width: 200px; */
  width: 100%;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

}
.Wthumb {
  display: flex;
  align-items: center;
  flex-direction: column;
  height: 120px;
}
.Wthumb ::slotted(img) {
  /* border: 2px solid cyan; */

  /* max-width: calc( 100% - 20px ); */
  width: 120px;
  max-width: 120px;

  /* height: auto; */
  /* max-height: calc( 100% - 20px ); */
  height: 120px;
  max-height: 120px;

  padding-bottom: var(--ish-len-md);
}
.Wlabel {
  display: flex;
  flex-direction: row;
  align-items: center;
}
.Wlabel ::slotted(img) {
  margin-right: var(--ish-len-md);
}
::slotted(a) {
  color: black;
  text-decoration: none;
}
::slotted(*) {
  /* border: 1px solid red; */

  color: black;
}
</style>
<div class='W0'>
<div class='Marker shadow-14 ' >
  <div class='W1 ' >
    <div class='Wthumb'>
      <slot name='thumb'>img?</slot>
    </div>
    <div class='Wlabel' >
      <slot name='icon'>icon?</slot>
      <slot name='label'>label?</slot>
    </div>
  </div>
</div>
</div>
</template>

<script>

customElements.define('ish-marker-1', class extends HTMLElement {
constructor() {
  super()
  const template = document.getElementById('ish-marker-1-tmpl').content

  const wrapper = document.createElement("a")
  wrapper.appendChild( template.cloneNode(true) )
  wrapper.setAttribute('href', this.getAttribute('href'))
  wrapper.setAttribute('target', '_blank')

  const shadowRoot = this.attachShadow({mode: 'open'}).appendChild( wrapper )
}
})

</script>




