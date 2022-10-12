from tkinter import *
import conexion

def principal_admin():
    total=int(0)
    ventana=Tk()
    ventana.title("Administrador")
    ventana.config(bg="#DDFAFF")
    ventana.resizable(FALSE,FALSE) 
    ventana.geometry("600x500")

    miFrame=Frame(ventana)
    miFrame.pack(side=LEFT, anchor=CENTER)
    miFrame.config(bg="#E9F6F9")
    miFrame.config(relief="ridge")
    miFrame.config(border="2px")
    miFrame.place(x="5",y="180")
    texto=Label(ventana,text="MEDIA DE NOTAS" ,bg="#DDFAFF",font=20,fg="#257191")
    texto.place(x="230",y="80")
    depto=Label(ventana,text="Departamento" ,bg="#DDFAFF",font=20,fg="#257191")
    depto.place(x="2",y="150")
    prom=Label(ventana,text="Promedio" ,bg="#DDFAFF",font=20,fg="#257191")
    prom.place(x="300",y="150")

   # cursor=conexion.mydb.cursor()
    sql="SELECT CASE xp.departamento WHEN '01'then 'Chuquisaca'WHEN '02'then 'La Paz' WHEN '03'then 'Cochabamba' WHEN '04'then 'Oruro' WHEN '05'then 'Potosí' WHEN '06'then ' Tarija' WHEN '07'then 'Santa Cruz' WHEN '08'then 'Beni'WHEN '09'then 'Pando' else 'otro' END departamento,AVG(xi.nota_final) promedio from persona xp, inscripcion xi where xp.ci=xi.ci_estudiante GROUP BY xp.departamento"
    cursor.execute(sql)
    result=cursor.fetchall()
    

    for i in range(len(result)): 
        for j in range(2): 

            e = Entry(miFrame, width=24, fg='black', 
                           font=('Arial',16,'bold')) 
            e.grid(row=i, column=j) 
            e.insert(END,result[i][j])  

    ventana.mainloop()

ventana_login=Tk()
def login():
    global ventana_login
    ventana_login.title("Acceso al sistema")
    ventana_login.geometry("300x250")
    Label(ventana_login,text="introduzca el nombre de usurio y contraseña")
    Label(ventana_login,text="").pack()

    global verifica_usuario
    global verifica_clave

    verifica_usuario=StringVar()
    verifica_clave=StringVar()

    global entrada_login_usuario
    global entrada_login_clave

    Label(ventana_login, text="Nombre  de usuario * ").pack()
    entrada_login_usuario=Entry(ventana_login,textvariable=verifica_usuario)
    entrada_login_usuario.pack()
    Label(ventana_login, text="").pack()
    Label(ventana_login, text="Contraseña * ").pack()
    entrada_login_clave=Entry(ventana_login,textvariable=verifica_clave, show="*")
    entrada_login_clave.pack()
    Label(ventana_login, text="").pack()
    Button(ventana_login,text="Acceder",width=10, height=1,command=verifica_login).pack()

def mensaje():
    ventanaAlt=Tk()
    ventanaAlt.title("Advertencia ")
    ventanaAlt.geometry("300x200")
    text=Label(ventanaAlt,text="Datos ingresados incorrectos ")
    text1=Label(ventanaAlt,text="o es posible que NO seas ADMINISTRADOR ")
    text2=Label(ventanaAlt,text="o simplemente no tienes ningun tipo de acceso")
    text.place(x="10",y="10")
    text1.place(x="10",y="40")
    text2.place(x="10",y="70")
    ventanaAlt.mainloop()

def verifica_login():
    global cursor
    cursor=conexion.mydb.cursor()
    usuario=verifica_usuario.get()
    clave=verifica_clave.get()
    sql="SELECT * FROM acceso WHERE nombre_rol='administrador' and usuario='"+str(usuario)+"' and password='"+str(clave)+"'"
    cursor.execute(sql)
    result=cursor.fetchall()
    if(result):
        print("usuario con acceso")
        principal_admin()
    else:
        print("usuario sin acceso")
        mensaje()
    cursor.close() 
    conexion.mydb.close() 
login()
ventana_login.mainloop()
