import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-placholder', IndexField)
  app.component('detail-placholder', DetailField)
  app.component('form-placholder', FormField)
})
