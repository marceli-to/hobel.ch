import Alpine from 'alpinejs'
import dynamicHeader from './components/dynamicHeader'

window.Alpine = Alpine

// Register Alpine components
Alpine.data('dynamicHeader', dynamicHeader)

Alpine.start();

import './bootstrap';