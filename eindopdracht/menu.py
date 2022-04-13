from tkinter import *
from tkinter import messagebox
from PIL import ImageTk, Image
import numbers
import random

# Maak een nieuw window met een titel
window = Tk()
window.title("Ontspanningstool")

# Functies voor het menu
def show_homescreen():
    frame_homescreen.pack()
    frame_dobbelen.pack_forget()
    frame_getalraden.pack_forget()
    frame_BKE.pack_forget()
    frame_galgje.pack_forget()

def show_galgje():
    frame_homescreen.pack_forget()
    frame_dobbelen.pack_forget()
    frame_getalraden.pack_forget()
    frame_BKE.pack_forget()
    frame_galgje.pack()

def show_dobbelen():
    frame_homescreen.pack_forget()
    frame_dobbelen.pack()
    frame_galgje.pack_forget()
    frame_getalraden.pack_forget()
    frame_BKE.pack_forget()

def show_getalraden():
    frame_homescreen.pack_forget()
    frame_getalraden.pack()
    frame_galgje.pack_forget()
    frame_dobbelen.pack_forget()
    frame_BKE.pack_forget()

def show_BKE():
    frame_homescreen.pack_forget()
    frame_BKE.pack()
    frame_galgje.pack_forget()    
    frame_dobbelen.pack_forget()    
    frame_getalraden.pack_forget()    

# Menu maken
menubar = Menu(window)
window.config(menu=menubar)

# Menu items maken
mainmenu = Menu(menubar)
mainmenu.add_command(label="Home", command=show_homescreen)
mainmenu.add_command(label="Galgje - Anouk", command=show_galgje)
mainmenu.add_command(label="Dobbelen - Naufal", command=show_dobbelen)          
mainmenu.add_command(label="Getal Raden - Jimmy", command=show_getalraden)          
mainmenu.add_command(label="Boter, kaas & eieren - Tom", command=show_BKE)          
mainmenu.add_separator()
mainmenu.add_command(label="Exit", command=window.quit)
# Menu toevoegen aan menubar
menubar.add_cascade(label="Games", menu=mainmenu)

######################################################################################################
# FRAME VOOR HOMESCREEN --------------------------------
frame_homescreen = Frame(bg="#fcba03")
label1_homescreen=Label(frame_homescreen,text="Let's play a game!",bg="#fcba03", fg="#170045", font=('Helvetica','50', 'bold'), padx = 200, pady=50)
label1_homescreen.pack()

label2_homescreen=Label(frame_homescreen,text="Klik op het menu op een spelletje te keizen",bg="#fcba03", fg="#170045", font=('Helvetica','30', 'bold'), padx=200, pady=50 )
label2_homescreen.pack()

label3_homescreen=Label(frame_homescreen,text="Gemaakt door Anouk, Tom, Naufal en Jimmy",bg="#fcba03", fg="#170045", font=('Helvetica','15', 'italic'), pady=50 )
label3_homescreen.pack()

######################################################################################################
# FRAME VOOR GALGJE --------------------------------
frame_galgje = Frame(bg='#47162a')

kansen = 8;

label1_galgje=Label(frame_galgje,text="--- Galgje ---",bg="#47162a", fg="#fa0066", font=('papyrus','50', 'bold'))
label1_galgje.grid(row=0,column=4, columnspan=6)


image_list=['eindopdracht/h9.png', 'eindopdracht/h8.png', 'eindopdracht/h7.png', 'eindopdracht/h6.png','eindopdracht/h5.png','eindopdracht/h4.png','eindopdracht/h3.png', 'eindopdracht/h2.png', 'eindopdracht/h1.png']
img = Image.open(image_list[kansen])
img = img.resize((400, 400), Image.Resampling.LANCZOS) #make all images the same size
img= ImageTk.PhotoImage(img)
panel = Label(frame_galgje, image = img, bg = '#47162a') #insert images into label
panel.grid(column=0, row=1, rowspan=6, padx = 25)
answer_arr=[]
def clicked(alphabet):
    global kansen
    answer= "PYTHON";
    if alphabet in answer: #See if chosen letter is in the word you have to guess
        if alphabet=="P":
            btn01["text"] = alphabet;
        elif alphabet=="Y":
            btn02["text"] = alphabet;
        elif alphabet=="T":
            btn03["text"] = alphabet;
        elif alphabet=="H":
            btn04["text"] = alphabet;
        elif alphabet=="O":
            btn05["text"] = alphabet;
        elif alphabet=="N":
            btn06["text"] = alphabet;
    else:
        txt="Nog " + str(kansen) + " kansen over";
        label2_galgje.configure(text=txt)
        image = Image.open(image_list[kansen])
        image = image.resize((400, 400), Image.Resampling.LANCZOS)
        imgnew = ImageTk.PhotoImage(image)
        panel.configure(image=imgnew) #updating images use configure
        panel.image = imgnew
        kansen = kansen - 1;
        if kansen < 0:
            messagebox.showinfo("YOU LOSE!","Helaas je hebt het woord niet geraden...")
            frame_galgje.destroy()
    if btn01["text"]=="P" and btn02["text"]=="Y" and btn03["text"]=="T" and btn04["text"]=="H" and btn05["text"]=="O" and btn06["text"]=="N":
        messagebox.showinfo("YOU WIN!", "Gefeliciteerd je hebt het woord geraden!")
        frame_galgje.destroy()


# De vakjes van het te raden woord
btn01 = Button(frame_galgje, text=" ",bg="#fff2f7", fg="Black",width=3,height=1, font=('papyrus','20'))
btn01.grid(column=4, row=1, rowspan=2)
btn02 = Button(frame_galgje, text=" ",bg="#fff2f7", fg="Black",width=3,height=1,font=('papyrus','20'))
btn02.grid(column=5, row=1, rowspan=2)
btn03 = Button(frame_galgje, text=" ",bg="#fff2f7", fg="Black",width=3,height=1,font=('papyrus','20'))
btn03.grid(column=6, row=1, rowspan=2)
btn04 = Button(frame_galgje, text=" ",bg="#fff2f7", fg="Black",width=3,height=1,font=('papyrus','20'))
btn04.grid(column=7, row=1, rowspan=2)
btn05 = Button(frame_galgje, text=" ",bg="#fff2f7", fg="Black",width=3,height=1,font=('papyrus','20'))
btn05.grid(column=8, row=1, rowspan=2)
btn06 = Button(frame_galgje, text=" ",bg="#fff2f7", fg="Black",width=3,height=1,font=('papyrus','20'))
btn06.grid(column=9, row=1, rowspan=2)

label2_galgje=Label(frame_galgje,text="Je hebt 6 kansen om het woord te raden", bg = '#47162a', fg='#fff2f7')
label2_galgje.grid(row=3,column=4, columnspan=5, sticky="nw", pady=10,)

# Alle letters, rij 1
btn0 = Button(frame_galgje, text="-",bg="#fa0066", fg="Black", width=3,height=1,font=('papyrus','20'),command=lambda: clicked("-"))
btn0.grid(column=1, row=4, sticky='s')
btn1 = Button(frame_galgje, text="Q",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("Q"))
btn1.grid(column=2, row=4, sticky='s')
btn2 = Button(frame_galgje, text="W",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("W"))
btn2.grid(column=3, row=4, sticky='s')
btn3 = Button(frame_galgje, text="E",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("E"))
btn3.grid(column=4, row=4, sticky='s')
btn4 = Button(frame_galgje, text="R",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("R"))
btn4.grid(column=5, row=4, sticky='s')
btn5 = Button(frame_galgje, text="T",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("T"))
btn5.grid(column=6, row=4, sticky='s')
btn6 = Button(frame_galgje, text="Y",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("Y"))
btn6.grid(column=7, row=4, sticky='s')
btn7 = Button(frame_galgje, text="U",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("U"))
btn7.grid(column=8, row=4, sticky='s')
btn8 = Button(frame_galgje, text="I",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("I"))
btn8.grid(column=9, row=4, sticky='s')
btn9 = Button(frame_galgje, text="O",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("O"))
btn9.grid(column=10, row=4, sticky='s')
btn10 = Button(frame_galgje, text="P",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("P"))
btn10.grid(column=11, row=4, sticky='s')

#rij 2
btn11= Button(frame_galgje, text="A",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("A"))
btn11.grid(column=2, row=5)
btn12 = Button(frame_galgje, text="S",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("S"))
btn12.grid(column=3, row=5)
btn13 = Button(frame_galgje, text="D",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("D"))
btn13.grid(column=4, row=5)
btn14 = Button(frame_galgje, text="F",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("F"))
btn14.grid(column=5, row=5)
btn15= Button(frame_galgje, text="G",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("G"))
btn15.grid(column=6, row=5)
btn16 = Button(frame_galgje, text="H",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("H"))
btn16.grid(column=7, row=5)
btn17 = Button(frame_galgje, text="J",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("J"))
btn17.grid(column=8, row=5)
btn18 = Button(frame_galgje, text="K",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("K"))
btn18.grid(column=9, row=5)
btn19 = Button(frame_galgje, text="L",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("L"))
btn19.grid(column=10, row=5)

# rij 3
btn20 = Button(frame_galgje, text="Z",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("Z"))
btn20.grid(column=3, row=6, sticky='n')
btn21 = Button(frame_galgje, text="X",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("X"))
btn21.grid(column=4, row=6, sticky='n')
btn22 = Button(frame_galgje, text="C",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("C"))
btn22.grid(column=5, row=6, sticky='n')
btn23 = Button(frame_galgje, text="V",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("V"))
btn23.grid(column=6, row=6, sticky='n')
btn24 = Button(frame_galgje, text="B",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("B"))
btn24.grid(column=7, row=6, sticky='n')
btn25 = Button(frame_galgje, text="N",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("N"))
btn25.grid(column=8, row=6, sticky='n')
btn26 = Button(frame_galgje, text="M",bg="#fa0066", fg="Black",width=3,height=1,font=('papyrus','20'),command=lambda: clicked("M"))
btn26.grid(column=9, row=6, sticky='n')

######################################################################################################
# FRAME VOOR DOBBELEN --------------------------------
frame_dobbelen = Frame()

label_dobbel = Label(frame_dobbelen,font=('bold',400))
def dobbelsteen():
    nummer = ['\u2680','\u2681','\u2682','\u2683','\u2684','\u2685']
    label_dobbel.config(text=f'{random.choice(nummer)}')
    label_dobbel.pack()

heading = Label(frame_dobbelen,text='DOBBELEN',font=('bold',50),bg='red')
heading.pack(fill=X)

label1_dobbel = Frame(master=frame_dobbelen, height=80, bg="white")
label1_dobbel.pack(fill=X)

label2_dobbel = Frame(master=frame_dobbelen, height=80, bg="blue")
label2_dobbel.pack(fill=X)

button_gooi = Button(frame_dobbelen,text='Gooi',font=('normal',25),bg='orange',command=lambda:dobbelsteen())
button_gooi.pack()

######################################################################################################
# FRAME VOOR GETAL RADEN --------------------------------
frame_getalraden = Frame(borderwidth=10, pady = 50, padx = 50, bg = "#30783d")
#label
label_niet =Label(frame_getalraden, text="Raad het getal tussen 0 - 100",font="calabria",anchor="center",pady = 20, bg = "#30783d", fg = "yellow")
label_niet.pack()

label_raad = Label(frame_getalraden,anchor="center",pady=10,text="Je hebt nog niks geraden" , bg = "#30783d", fg = "yellow")
label_raad.pack()

# vraagveld
entry = Entry(master=frame_getalraden, width=20)
entry.pack()

# Submit button
btn_submit = Button(master=frame_getalraden, text="Raad",padx=20, bg = "yellow")
btn_submit.pack()

# Clear button
btn_clear = Button(master=frame_getalraden,text="clear",padx=20, bg = "yellow")
btn_clear.pack()

#number generator
number = random.randint(1,100)

# Raad event handler
def handle_submit(event):
    guess = None
    while guess != number:
        guess = int(entry.get())
        if number == guess:
            label_raad["text"] = "Goedzo het getal was", + number
            break
        elif number > guess:
            label_raad["text"] = "Jouw getal is lager dan het te raden getal. Probeer het nog een keer" 
            break
        elif number < guess:
            label_raad["text"] = "Jouw getal is groter dan het te raden getal. Probeer het nog een keer"
            break

# button clear
def handle_clear(event):
    entry.delete(0, 'end')

# verbind de button met de event handler
btn_submit.bind("<Button-1>", handle_submit)
btn_clear.bind("<Button-1>", handle_clear)

######################################################################################################
# FRAME VOOR BOTER KAAS EIEREN --------------------------------
frame_BKE = Frame(bg = '#ADD8E6', pady=50, padx=50)
lbl = Label(frame_BKE, text = "Boter, kaas en eieren", font = ('Helvetica','15'), bg = '#ADD8E6')
lbl.grid(row = 0, column = 0)
lbl = Label(frame_BKE, text ="Speler 1: X", font = ('Helvetica','10'), bg = '#ADD8E6')
lbl.grid(row = 1, column = 0)
lbl = Label(frame_BKE, text = "Speler 2: O", font = ('Helvetica','10'), bg = '#ADD8E6')
lbl.grid(row = 2, column = 0)

turn=1

def clicked1():
    global turn
    if btn1["text"] == " ":
        if turn == 1:
            turn = 2
            btn1["text"] = "X"
        elif turn == 2:
            turn = 1
            btn1["text"] = "O"
        check()
def clicked2():
    global turn
    if btn2["text"] == " ":
        if turn == 1:
            turn = 2
            btn2["text"] = "X"
        elif turn == 2:
            turn = 1
            btn2["text"] = "O"
        check()
def clicked3():
    global turn
    if btn3["text"] == " ":
        if turn == 1:
            turn = 2
            btn3["text"] = "X"
        elif turn == 2:
            turn = 1
            btn3["text"] = "O"
        check()
def clicked4():
    global turn
    if btn4["text"] == " ":
        if turn == 1:
            turn = 2
            btn4["text"] = "X"
        elif turn == 2:
            turn = 1
            btn4["text"] = "O"
        check()
def clicked5():
    global turn
    if btn5["text"] == " ":
        if turn == 1:
            turn = 2
            btn5["text"] = "X"
        elif turn == 2:
            turn = 1
            btn5["text"] = "O"
        check()
def clicked6():
    global turn
    if btn6["text"] == " ":
        if turn == 1:
            turn = 2
            btn6["text"] = "X"
        elif turn == 2:
            turn = 1
            btn6["text"] = "O"
        check()
def clicked7():
    global turn
    if btn7["text"] == " ":
        if turn == 1:
            turn = 2
            btn7["text"] = "X"
        elif turn == 2:
            turn = 1
            btn7["text"] = "O"
        check()
def clicked8():
    global turn
    if btn8["text"] == " ":
        if turn == 1:
            turn = 2
            btn8["text"] = "X"
        elif turn == 2:
            turn = 1
            btn8["text"] = "O"
        check()
def clicked9():
    global turn
    if btn9["text"] == " ":
        if turn == 1:
            turn = 2
            btn9["text"] = "X"
        elif turn == 2:
            turn = 1
            btn9["text"] = "O"
        check()
flag = 1
def check():
    global flag
    b1 = btn1["text"]
    b2 = btn2["text"]
    b3 = btn3["text"]
    b4 = btn4["text"]
    b5 = btn5["text"]
    b6 = btn6["text"]
    b7 = btn7["text"]
    b8 = btn8["text"]
    b9 = btn9["text"]
    flag = flag +1
    if b1 == b2 and b1 == b3 and b1 == "O" or b1 == b2 and b1 == b3 and b1 == "X":
        win(btn1["text"])
    if b4 == b5 and b4 == b6 and b4 == "O" or b4 == b5 and b4 == b6 and b4 == "X":
        win(btn4["text"])
    if b7 == b8 and b7 == b9 and b7 == "O" or b7 == b8 and b7 == b9 and b7 == "X":
        win(btn7["text"])
    if b1 == b4 and b1 == b7 and b1 == "O" or b1 == b4 and b1 == b7 and b1 == "X":
        win(btn1["text"])
    if b2 == b5 and b2 == b8 and b2 == "O" or b2 == b5 and b2 == b8 and b2 == "X":
        win(btn2["text"])
    if b3 == b6 and b3 == b9 and b3 == "O" or b3 == b6 and b3 == b9 and b3 == "X":
        win(btn3["text"])
    if b1 == b5 and b1 == b9 and b1 == "O" or b1 == b5 and b1 == b9 and b1 == "X":
        win(btn1["text"])
    if b7 == b5 and b7 == b3 and b7 == "O" or b7 == b5 and b7 == b3 and b7 == "X":
        win(btn7["text"])
    if flag == 10:
        messagebox.showinfo("Gelijkspel", "Gelijkspel!!!  Probeer het nog een keer :)")
        frame_BKE.destroy()

def win(player):
    ans = "Spel voorbij " + player + " wint! "
    messagebox.showinfo("Gefeliciteerd", ans)
    frame_BKE.destroy()


btn1 = Button(frame_BKE, text = " ", bg = "red", fg="Black", width = 3, height = 1, font = ('Helvetica','20'), command=clicked1)
btn1.grid(column = 1, row = 1)
btn2 = Button(frame_BKE, text = " ", bg = "red", fg = "Black", width = 3, height = 1, font = ('Helvetica','20'), command=clicked2)
btn2.grid(column = 2, row = 1)
btn3 = Button(frame_BKE, text = " ", bg = "red", fg = "Black", width = 3, height = 1, font = ('Helvetica','20'), command=clicked3)
btn3.grid(column = 3, row = 1)
btn4 = Button(frame_BKE, text = " ", bg = "red", fg = "Black", width = 3, height = 1, font = ('Helvetica','20'), command=clicked4)
btn4.grid(column = 1, row = 2)
btn5 = Button(frame_BKE, text = " ", bg = "red", fg = "Black", width = 3, height = 1, font = ('Helvetica','20'), command=clicked5)
btn5.grid(column = 2, row = 2)
btn6 = Button(frame_BKE, text = " ", bg = "red", fg = "Black", width = 3, height = 1, font = ('Helvetica','20'), command=clicked6)
btn6.grid(column = 3, row = 2)
btn7 = Button(frame_BKE, text = " ", bg = "red", fg = "Black", width = 3, height = 1, font = ('Helvetica','20'), command=clicked7)
btn7.grid(column = 1, row = 3)
btn8 = Button(frame_BKE, text = " ", bg = "red", fg = "Black", width = 3, height = 1, font = ('Helvetica','20'), command=clicked8)
btn8.grid(column = 2, row = 3)
btn9 = Button(frame_BKE, text = " ", bg = "red", fg = "Black", width = 3, height = 1, font = ('Helvetica','20'), command=clicked9)
btn9.grid(column = 3, row = 3)

# Begin met homescreen
show_homescreen()
# Start the application
window.mainloop()
