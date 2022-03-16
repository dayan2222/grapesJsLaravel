const editor = grapesjs.init({
    // Indicate where to init the editor. You can also pass an HTMLElement
    container: '#gjs',
    // Get the content for the canvas directly from the element
    // As an alternative we could use: `components: '<h1>Hello World Component!</h1>'`,
    fromElement: true,
    // Size of the editor
    height: '650px',
    width: 'auto',
    // deviceManager: {
    //   devices: [{
    //       name: 'Desktop',
    //       width: '', // default size
    //     }, {
    //       name: 'Mobile',
    //       width: '320px', // this value will be used on canvas width
    //       widthMedia: '480px', // this value will be used in CSS @media
    //   }]
    // },
    // Disable the storage manager for the moment
    // storageManager: false,
    storageManager: {
      id: 'gjs-',             // Prefix identifier that will be used inside storing and loading
      type: 'local',          // Type of the storage
      autosave: true,         // Store data automatically
      autoload: true,         // Autoload stored data on init
      stepsBeforeSave: 1,     // If autosave enabled, indicates how many changes are necessary before store method is triggered
      storeComponents: true,  // Enable/Disable storing of components in JSON format
      storeStyles: true,      // Enable/Disable storing of rules in JSON format
      storeHtml: true,        // Enable/Disable storing of components as HTML string
      storeCss: true,         // Enable/Disable storing of rules as CSS string
    },
    layerManager: {
      appendTo: '.layers-container'
    },
    // Avoid any default panel
    // panels: { defaults: [] },
    
    panels: { 
      defaults: [
        {
        id: 'layers',
        el: '.panel__right',
        // Make the panel resizable
        resizable: {
          maxDim: 350,
          minDim: 200,
          tc: 0, // Top handler
          cl: 1, // Left handler
          cr: 0, // Right handler
          bc: 0, // Bottom handler
          // Being a flex child we need to change `flex-basis` property
          // instead of the `width` (default)
          keyWidth: 'flex-basis',
        },
        },
        {
        id: 'panel-switcher',
        el: '.panel__switcher',
        buttons: [{
            id: 'show-layers',
            active: true,
            label: '<span class="fa fa-bars" style="display: inline-block;"></span>',
            command: 'show-layers',
            // Once activated disable the possibility to turn it off
            togglable: false,
          }, {
            id: 'show-style',
            active: true,
            label: '<span class="fa fa-paint-brush" style="display: inline-block;"></span>',
            command: 'show-styles',
            togglable: false,
        },
        {
          id: 'show-traits',
          active: true,
          label: '<span class="fa fa-cog" style="display: inline-block;"></span>',
          command: 'show-traits',
          togglable: false,
        }, 
        {
          id: 'block-manager',
          active: true,
          label: '<span class="fa fa-th-large" style="display: inline-block;"></span>',
          command: 'block-manager',
          togglable: false,
        },
      ],
      }]
     }, // end panels
     traitManager: {
      appendTo: '.traits-container',
    }, // end traits
      // The Selector Manager allows to assign classes and
      // different states (eg. :hover) on components.
      // Generally, it's used in conjunction with Style Manager
      // but it's not mandatory
      selectorManager: {
        appendTo: '.styles-container'
      },
      styleManager: {
        appendTo: '.styles-container',
        sectors: [{
          name: 'General',
          open: false,
          buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom']
        },{
          name: 'Flex',
          open: false,
          buildProps: ['flex-direction', 'flex-wrap', 'justify-content', 'align-items', 'align-content', 'order', 'flex-basis', 'flex-grow', 'flex-shrink', 'align-self']
        },{
          name: 'Dimension',
          open: false,
          buildProps: ['width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
        },{
          name: 'Typography',
          open: false,
          buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-shadow'],
        },{
          name: 'Decorations',
          open: false,
          buildProps: ['border-radius-c', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
        },{
          name: 'Extra',
          open: false,
          buildProps: ['transition', 'perspective', 'transform'],
        }
      ], // end sectors
      },
    
    blockManager: {
        appendTo: '.blocks-container',
        blocks: [
          {
            id: 'section', // id is mandatory
            label: "Section", // label is mandatory
            attributes: { class:'gjs-block-section' },
            content: `<section>
              <h1>This is a simple title</h1>
              <div>This is just a Lorem text: Lorem ipsum dolor sit amet</div>
            </section>`,
          }, {
            id: 'text',
            label: 'Text',
            content: '<div data-gjs-type="text">Insert your text here</div>',
          }, {
            id: 'image',
            label: 'Image',
            select: true,
            content: { type: 'image' },
            activate: true,
          },
          {
            id: 'button',
            label: 'Button',
            content: '<button>Click me!</button>',
            attributes: { class:'gjs-block-button' },
          },
          {
            id: 'video',
            label: 'Video',
            content: {
              type: 'video',
              src: 'img/nfk.mp4',
              style: {
                height: '350px',
                width: '615px'
              }
            },
            attributes: { class:'gjs-block-video' },

          },
          
        ]
      },
      layerManager: {
        appendTo: '.layers-container'
      },
  });

  editor.Panels.addPanel({
    id: 'panel-top',
    el: '.panel__top',
  });
  editor.Panels.addPanel({
    id: 'basic-actions',
    el: '.panel__basic-actions',
    buttons: [
      {
        id: 'visibility',
        active: true, // active by default
        className: 'btn-toggle-borders',
        label: '<span class="fa fa-square-o" style="display: inline-block;"></span>',
        command: 'sw-visibility', // Built-in command
      }, {
        id: 'export',
        className: 'btn-open-export',
        label: '<span class="fa fa-download" style="display: inline-block;"></span>',
        command: 'export-template',
        context: 'export-template', // For grouping context of buttons from the same panel
      },
      {
        id: 'preview',
        className: 'btn-open-preview',
        label: '<span class="fa fa-eye" style="display: inline-block;"></span>',
        command: 'preview',
      },
      {
        id: 'fullscreen',
        className: 'btn-open-fullscreen',
        label: '<span class="fa fa-arrows-alt" style="display: inline-block;"></span>',
        command: 'fullscreen',
      },
      {
        id: 'save',
        className: 'btn-save',
        label: '<span class="fa fa-save" style="display: inline-block;"></span>',
        command: 'save-template',
      },
    ],
  });

// Define commands
editor.Commands.add('show-layers', {
  getRowEl(editor) { return editor.getContainer().closest('.editor-row'); },
  getLayersEl(row) { return row.querySelector('.layers-container') },

  run(editor, sender) {
    const lmEl = this.getLayersEl(this.getRowEl(editor));
    lmEl.style.display = '';
  },
  stop(editor, sender) {
    const lmEl = this.getLayersEl(this.getRowEl(editor));
    lmEl.style.display = 'none';
  },
});
editor.Commands.add('show-styles', {
  getRowEl(editor) { return editor.getContainer().closest('.editor-row'); },
  getStyleEl(row) { return row.querySelector('.styles-container') },

  run(editor, sender) {
    const smEl = this.getStyleEl(this.getRowEl(editor));
    smEl.style.display = '';
  },
  stop(editor, sender) {
    const smEl = this.getStyleEl(this.getRowEl(editor));
    smEl.style.display = 'none';
  },
});

// // Commands for moile
// editor.Commands.add('set-device-desktop', {
//   run: editor => editor.setDevice('Desktop')
// });
// editor.Commands.add('set-device-mobile', {
//   run: editor => editor.setDevice('Mobile')
// });

// Define command
editor.Commands.add('show-traits', {
  getTraitsEl(editor) {
    const row = editor.getContainer().closest('.editor-row');
    return row.querySelector('.traits-container');
  },
  run(editor, sender) {
    this.getTraitsEl(editor).style.display = '';
  },
  stop(editor, sender) {
    this.getTraitsEl(editor).style.display = 'none';
  },

});


editor.Commands.add('block-manager', {
  getRowEl(editor) { return editor.getContainer().closest('.editor-row'); },
  getStyleEl(row) { return row.querySelector('.blocks-container') },

  run(editor, sender) {
    const smEl = this.getStyleEl(this.getRowEl(editor));
    smEl.style.display = '';
  },
  stop(editor, sender) {
    const smEl = this.getStyleEl(this.getRowEl(editor));
    smEl.style.display = 'none';
  },
});





$(".btn-save").click(function (e) { 
  e.preventDefault();
  var gjs_html = localStorage.getItem("gjs-html")
  var gjs_css = localStorage.getItem("gjs-css")

  Swal.fire({
    title: 'Do you want to save the changes?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: 'Save',
    denyButtonText: `Don't save`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      $.ajax({
        url: "/api/save",
        type: "POST",
        data: {
          "html": gjs_html,
          "css": gjs_css
        },
        success: function (data) {
          console.log(data);
          window.localStorage.clear();
          Swal.fire(
            'Saved!',
            'Your file has been saved.',
            'success'
          )
        }
      });

    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
  
  

});