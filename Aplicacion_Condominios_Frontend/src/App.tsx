import { BrowserRouter, Route, Routes } from "react-router-dom";
import MainLayout from "./components/layout/MainLayout";
import { routes } from "./routes";
import 'bootstrap/dist/css/bootstrap.min.css';
import EmployeeEdit from "./empleados/pages/employee_edit";
import EmployeeRegister from "./empleados/pages/employee_register";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<MainLayout />}>
          {routes}
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
