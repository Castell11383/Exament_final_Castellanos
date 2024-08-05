const formulario = document.getElementById('FormularioUsuario');
const Usuario = document.getElementById('Usuario');
const BtnEnviar = document.getElementById('BtnEnviar');
const Pais = document.getElementById('Pais');
const NombreUsuario = document.getElementById('NombreUsario');
const Telefono = document.getElementById('Telefono');

const ObtenerNombres = async (e) => {
    e.preventDefault();

    BtnEnviar.disabled = true;
    const Nombre = Usuario.value;

    try {
        const consulta = await fetch(`https://api.github.com/users/${Nombre}`, {
            method: 'GET',
        });

        if (consulta.status == 200) {
            const datos = await consulta.json();
            NombreUsuario.value = datos.name;
        } else {
            console.error('Usuario no encontrado');
        }
    } catch (error) {
        console.error('Error al obtener datos del usuario:', error);
    }
    BtnEnviar.disabled = false;
};

const ObtenerPaises = async () => {
    try {
        const consulta = await fetch('https://restcountries.com/v3.1/all');

        if (consulta.status === 200) {
            const datos = await consulta.json();
            const fragment = document.createDocumentFragment();

            for (let index = 0; index < datos.length; index++) {
                const option = document.createElement('option');
                option.textContent = datos[index].name.common;
                option.value = datos[index].idd ? `${datos[index].idd.root}${datos[index].idd.suffixes.join('')}` : '';

                fragment.appendChild(option);
            }

            Pais.appendChild(fragment);

            Pais.addEventListener('change', () => {
                const SeleccionarPais = Pais.options[Pais.selectedIndex];
                Telefono.value = SeleccionarPais.value;
            });
        } else {
            console.error('Error al obtener países');
        }
    } catch (error) {
        console.error('Error al obtener países:', error);
    }
};

Usuario.addEventListener('blur', ObtenerNombres);
ObtenerPaises();
