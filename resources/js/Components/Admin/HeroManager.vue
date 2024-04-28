<script>

import Uploader from "vue-media-upload";

export default (await import('vue')).defineComponent({
    components: {
      Uploader
    },

});

</script>

<template>
    <div>
        <Uploader server="sections/uploadheroimages" />
    </div>
</template>