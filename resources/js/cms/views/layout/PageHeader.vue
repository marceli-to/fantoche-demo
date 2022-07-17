<template>
<div>
  <header class="page-header">
    <div>
      <a href="/administration" class="brand">
        FANTOCHE
      </a>
      <a href="javascript:;" @click="toggleMenu()" class="feather-icon">
        <menu-icon size="24"></menu-icon>
      </a>
    </div>
  </header>
  <nav :class="[!menuVisible ? '' : 'is-visible', 'page']">
    <header>
      <span>
        <strong>{{user}}</strong><br>
        <a href="/logout" class="feather-icon feather-icon--prepend">
          <log-out-icon size="12"></log-out-icon>
          <span>Logout</span>
        </a>
      </span>
      <a href="javascript:;" @click="toggleMenu()" class="feather-icon ">
        <arrow-right-icon size="24"></arrow-right-icon>
      </a>
    </header>
    <ul>
      <li>
        <router-link :to="{name: 'home-dashboard'}">
          <span>Startseite</span>
        </router-link>
        <router-link :to="{name: 'events'}">
          <span>Veranstaltungen</span>
        </router-link>
        <router-link :to="{name: 'annual-programs'}">
          <span>Jahresprogramm</span>
        </router-link>
        <router-link :to="{name: 'page'}">
          <span>Spezialseiten</span>
        </router-link>
        <router-link :to="{name: 'about'}">
          <span>Über uns</span>
        </router-link>
        <router-link :to="{name: 'activities'}">
          <span>Aktivitäten</span>
        </router-link>
        <router-link :to="{name: 'galleries'}">
          <span>Mediengalerien</span>
        </router-link>
      </li>
    </ul>
  </nav>
</div>
</template>
<script>

import { ArrowRightIcon, MenuIcon, LogOutIcon } from 'vue-feather-icons';

export default {
  components: {
    ArrowRightIcon,
    MenuIcon,
    LogOutIcon,
  },

  props: {
    user: '',
  },

	data() {
		return {
			menuVisible: false
		}
  },
  
	methods: {
		toggleMenu() {
			this.menuVisible = this.menuVisible ? false : true;
		}
  },

  watch: {
    '$route'() {
      this.menuVisible = false
    }
  }
}
</script>
